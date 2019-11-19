<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_grades', function (Blueprint $table) {
            $table->bigInteger('student_id');
            $table->bigInteger('grade_id');
            $table->string('year');
            $table->primary(['student_id','grade_id','year']);
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('grade_id')->references('id')->on('grades');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_grades');
    }
}
