<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class postModel extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'title',
        'content',
        'description',
        'featured_image',
        'user_id'
    ];
  //  public $timestamps = false;

    public function posts(){
        return $posts = $postModel::all();
    }

    public function getOne($id){
        $post = postModel::find($id);
        return $post;
    }

    public function user(){
        return $this->belongsTo(userModel::class, 'user_id', 'id');
    }

   
}
