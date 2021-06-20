<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{

    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('commented_data');
            $table->unsignedBigInteger('forum_id');
            $table->unsignedBigInteger('user_id');
            $table->string('user_name');

            $table->foreign('forum_id')->references('id')->on('discussions');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
