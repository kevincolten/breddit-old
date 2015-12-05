<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubbredditUser extends Model
{
    protected $table = 'subbreddit_user';

    protected $fillable = ['user_id', 'subbreddit_id'];

    protected $hidden = [];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
