<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // prevents MassAssignmentExceptions
    protected $fillable = ['fullname', 'title_post', 'message'];
    
    function comment() {
        return $this->belongsTo('App\Comment');
    }
}
