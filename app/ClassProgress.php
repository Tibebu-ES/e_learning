<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassProgress extends Model
{
    protected $fillable = ['course_name','current_value','user_id','current_count'];
}
