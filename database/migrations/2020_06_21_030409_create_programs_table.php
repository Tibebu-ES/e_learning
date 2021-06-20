<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{

    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('course_name');
            $table->string('description');
            $table->string('program');
            $table->integer('joined')->nullable()->default(0);
            $table->integer('requested')->nullable()->default(0);
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
