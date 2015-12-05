<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subbreddit extends Model
{
    protected $table = 'subbreddits';

    protected $fillable = ['name', 'description'];

    protected $hidden = [];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
