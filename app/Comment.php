<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id','user_name','commented_data','forum_id','commented_date',
    ];

}
