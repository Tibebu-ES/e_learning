<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsSlipsTable extends Migration
{

    public function up()
    {

        Schema::create('students_slip', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_id');
            $table->string('course_name');
            $table->string('user_name');
            $table->unsignedBigInteger('user_id');
            $table->string('category');
            $table->string('description');
            $table->boolean('payment')->default(false);
            $table->boolean('completed')->default(false);

            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('user_id')->references('id')->on('users');

            $table->date('registration_date');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('StudentsSlip');
    }
}
