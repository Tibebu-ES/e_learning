<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassProgressTable extends Migration
{
    public function up()
    {
        Schema::create('class_progress', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->integer('current_value')->default(0);
            $table->integer('current_count')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('class_progress');
    }
}
