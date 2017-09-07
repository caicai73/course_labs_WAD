<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // prevents MassAssignmentExceptions
    protected $fillable = ['manufacturer_id', 'name', 'price'];
    
    function manufacturer() {
        return $this->belongsTo('App\Manufacturer');
    }
    
}
