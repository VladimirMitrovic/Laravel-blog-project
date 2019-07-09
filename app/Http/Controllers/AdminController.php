<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

use App\Models\userModel;
use App\Models\postModel;

class AdminController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = userModel::all();
        $user = Auth::user();
        $id = $user->id;
        $posts = postModel::with('user')->where('user_id','=',$id)->get();    
        return view('admin.pages.posts', compact('users','posts','user'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['form'] = "insert";
        $this->data['user'] = Auth::user();
        return view('admin.pages.posts', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->data['form'] = 'edit';
        $this->data['post'] = postModel::find($id);
        $this->data['user'] = Auth::user();
        return view('admin.pages.posts', $this->data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   //featured image
         if ($request->hasFile('picture')) {
             try {
                 $file = $request->file('picture');
                 $directory = public_path("images/");
                 $fileName = time() . "_" . $file->getClientOriginalName();
                 $file->move($directory, $fileName);

                 $postModel = postModel::find($id);
                 $postModel->featured_image = $fileName;
                 $postModel->save();

             } catch (QueryException $e) {
                 \Log::error("Greska pri update-u objave: " . $e->getMessage());
             } catch (FileException $e) {
                 \Log::error("Greska pri update-u objave u dodavanju slike: " . $e->getMessage());
             }
         }
        
         // images from text editor
        $detail=$request->input('content');
        $dom = new \DomDocument('1.0', 'UTF-8');
        libxml_use_internal_errors(true);
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
        $images = $dom->getElementsByTagName('img');
        foreach($images as $k => $img){
              $data = $img->getAttribute('src');
             // list($type, $data) = explode(';', $data);
              list($type, $data)= array_pad(explode(";", $data),2,null);
              list(, $data)= array_pad(explode(",", $data),2,null);
            //  list(, $data) = explode(',', $data);
              $data = base64_decode($data);
              $image_name= time().$k.'TO.png';
              $path = public_path("images/") . $image_name;
              file_put_contents($path, $data);
              $img->removeAttribute('src');
              $img->setAttribute('src', 'http://localhost/Laravel-blog-project/public/images/'.$image_name);
          }
            $detail = utf8_decode($dom->saveHTML($dom));
         
            //update post
             $postModel = postModel::find($id);
             $postModel->title = $request->title;
             $postModel->content = $detail;
             $postModel->description = $request->description;
             $date = date('Y-m-d H:i:s');
             $postModel->updated_at = $date;
             try {
                 $postModel->save();
                 return redirect()->back()->with(["message" => "Post successfully edited!"]);
             }
             catch (QueryException $e) {
                 \Log::error("Greska pri update-u objave: " . $e->getMessage());
                 return redirect()->back()->with("error", "An error occurred, please try again later");
             }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
