<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content',
        'author_id'
    ];

    public function author()
    {
        return $this->hasOne('App\User', 'id', 'author_id');
    }

    public function posts()
    {
        return $this->belongsToMany('App\Post', 'comment_post', 'post_id', 'id');
    }
}
