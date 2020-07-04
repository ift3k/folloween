<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    //Tweet and user relationship
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    //Post mass assignment
    protected $guarded = [];
}
