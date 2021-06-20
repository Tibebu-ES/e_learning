<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomsTable extends Migration
{

    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->string('className');
            $table->string('course_name');
            $table->json('students');
            $table->string('teacher');
            $table->string('type');
            $table->boolean('start')->default(false);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
