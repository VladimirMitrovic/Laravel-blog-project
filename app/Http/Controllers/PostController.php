<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\postModel;
use App\Models\userModel;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = postModel::with('user')->paginate(4);
        // return response()->json(['posts' => $posts,'pagination' => (string)$posts->links()], 200);
    }

    public function authorPosts($id)
    {
        if($id != 0){
        $posts = postModel::with('user')->where('user_id','=',$id)->get();
        return response()->json(['author_posts' => $posts], 200);
    }
        $posts = postModel::with('user')->get();
        return response()->json(['author_posts' => $posts], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {          
 
                 $file = $request->file('picture');
                 $directory = public_path("images/");
                 $fileName = time() . "_" . $file->getClientOriginalName();
                 $file->move($directory, $fileName);
                
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

               $form_data = array(
                   'title' => $request->title,
                   'content' => $detail,
                   'description' => $request->description,
                   'featured_image' => $fileName,
                   'user_id' => $request->user_id
               );

           
        $post = postModel::create($form_data);
        return response()->json(['data' => $post, 'success' => true, 'message' => 'Post is published!'], 200);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = postModel::find($id);
        if(is_null($post)){
            return response()->json(["message" => "Record not found!"], 404);
        }
        return response()->json($post, 200);
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
    {
        $post = postModel::find($id);
        if(is_null($post)){
            return response()->json(["message" => "Record not found!"], 404);
        }
        $post->update($request->all());
        return response()->json($post, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = postModel::find($id);
        if(is_null($post)){
            return response()->json(["message" => "Record not found!"], 404);
        }
        $post->delete();
        $posts = postModel::with('user')->get();
        return response()->json(['data' => $posts, 'success' => true, 'message' => 'Post is deleted!'], 200);
        
    }
}
