<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'email', 'dob', 'profImg', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    function comments() {
        return $this->hasMany('App\Comment');
    }
    
    function posts() {
        return $this->hasMany('App\Post');
    }
    
    public function friends()
	{
		return $this->belongsToMany('App\User', 'friends_users', 'user_id', 'friend_id');
	}
    
    // function getAgeAttribute()
    // {
    //     return Carbon::parse($this->attributes['dob'])->age;
    // }
    
    // public function getAge()
    // {
    //     $this->dob->diff(Carbon::now())
    //      ->format('%y years');
    // }
    
    // public function age() 
    // {
    //     return $this->dob->diffInYears(\Carbon::now());
    // }
}
