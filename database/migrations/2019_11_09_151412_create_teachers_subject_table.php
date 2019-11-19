<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_subject', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('teacher_id');
            $table->bigInteger('subjects_id');
            $table->string('year');
            $table->timestamps();
            $table->foreign('teacher_id')->references('id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers_subject');
    }
}
