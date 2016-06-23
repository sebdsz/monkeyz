<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'bananas',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function units()
    {
        return $this->belongsToMany('App\Unit');
    }

    public function resource()
    {
        return $this->belongsTo('App\Resource');
    }

    public function buildings()
    {
        return $this->belongsToMany('App\Building');
    }
}
