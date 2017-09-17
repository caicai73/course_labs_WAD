<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // prevents MassAssignmentExceptions
    protected $fillable = ['post_id', 'fullname', 'message'];
    
    function posts() {
        return $this->belongsTo('App\Post');
    }
    
    function users() {
        return $this->belongsTo('App\User');
    }
}
