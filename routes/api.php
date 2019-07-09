<?php

use Illuminate\Http\Request;
use App\Models\postModel;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostCollection;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/post', 'postController');
Route::get('/author/posts/{user_id}', 'postController@authorPosts');

Route::get('/posts/all', function(){
    return new PostCollection(postModel::paginate(8));
});

