<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'email',
        'password'
    ];
    public $timestamps = false;

    public function users(){
        return $users = $userModel::all();
    }

    public function posts(){
        return $this->hasMany(postModel::class);
    }
}
