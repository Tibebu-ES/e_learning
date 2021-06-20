<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password','mobile','gender'
    ];


    protected $hidden = [
        'password', 'remember_token','_token'
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function students_slips(){
        return $this->hasMany('App\Students_slip');
    }



}
