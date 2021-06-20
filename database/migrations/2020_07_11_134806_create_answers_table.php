<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{

    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->string('chapter');
            $table->integer('result');
            $table->integer('amount');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('course_id')->references('id')->on('programs');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
