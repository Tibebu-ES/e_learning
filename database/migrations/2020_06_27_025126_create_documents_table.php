<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{

    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->string('course_name');
            $table->json('course_title');
            $table->json('course_content');
            $table->json('course_attachment')->nullable();

            $table->foreign('course_id')->references('id')->on('programs');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
