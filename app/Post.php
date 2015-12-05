<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';

    protected $fillable = ['url', 'title', 'description', 'user_id', 'subbreddit_id'];

    protected $hidden = [];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function subbreddit()
    {
        return $this->belongsTo('App\Subbreddit');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
