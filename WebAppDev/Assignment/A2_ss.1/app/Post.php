<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // prevents MassAssignmentExceptions
    // protected $fillable = ['fullname', 'title_post', 'message'];
    
    function comments() {
        return $this->hasMany('App\Comment');
    }
    
    function privacies() {
        return $this->belongsTo('App\Privacy');
    }
    
    function users() {
        return $this->belongsTo('App\User');
    }
}
