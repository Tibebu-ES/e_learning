<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students_slip extends Model
{

    public $table = "students_slip";
    protected $fillable = ['program_id','course_name', 'user_id',
        'user_name','registration_date','category','description'];


}
