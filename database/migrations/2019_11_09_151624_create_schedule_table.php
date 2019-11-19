<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('classroom_id');
            $table->bigInteger('grade_id');
            $table->bigInteger('teacher_subject_id');
            $table->enum('day',[
                                'monday',
                                'tuesday',
                                'wednesday',
                                'thursday',
                                'friday',
                                'saturday',
                                'sunday'
                            ]);
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
            $table->foreign('classroom_id')->references('id')->on('classrooms');
            $table->foreign('grade_id')->references('id')->on('grades');
            $table->foreign('teacher_subject_id')->references('id')->on('teachers_subject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule');
    }
}
