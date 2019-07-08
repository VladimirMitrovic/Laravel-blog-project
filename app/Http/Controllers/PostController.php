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
        $posts = postModel::with('user')->get();
        return response()->json(['posts' => $posts], 200);
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

        $post = postModel::create($request->all());
        return response()->json($post, 200);
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
        return response()->json(['posts' => $posts], 200);
        
    }
}
