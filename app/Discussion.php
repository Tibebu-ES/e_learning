<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{

    protected $fillable = ['title'];

    protected $hidden = [
        'remember_token',
    ];


    public function comments(){
        return $this->hasMany('App\Comment','forum_id');
    }


}
