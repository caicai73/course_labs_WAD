<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    function users() {
        return $this->belongsTo('App\User');
    }
}
