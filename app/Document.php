<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['course_id','course_name','course_title','course_content','course_attachment'];


    public function questions(){
        return $this->hasMany('App\Question');
    }

}
