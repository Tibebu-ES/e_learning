<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $fillable = ['full_name','mobile','address',
        'assigned_course','category','course_name','speciality'];

}
