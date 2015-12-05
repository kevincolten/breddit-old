<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = ['text', 'user_id', 'comment_id', 'post_id'];

    protected $hidden = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comment()
    {
        return $this->belongsTo('App\Comment');
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
