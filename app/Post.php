<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'author_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function author()
    {
        return $this->hasOne('App\User', 'id', 'author_id');
    }

//    public function comments()
//    {
//        return $this->hasMany('App\CommentPost', 'id', 'id');
//    }
}
