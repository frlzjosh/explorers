<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentPost extends Model
{
    protected $table = 'comment_post';
    protected $fillable = [
        'post_id',
        'comment_id'
    ];
}
