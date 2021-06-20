<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['className','course_name','type','teacher','students'];

    public function documents(){
        return $this->hasMany('App\Document');
    }
}
