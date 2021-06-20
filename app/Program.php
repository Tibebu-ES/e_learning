<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{

    protected $fillable = ['category', 'course_name','description',
        'start_date','end_date','program'];

}
