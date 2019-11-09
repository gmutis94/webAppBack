<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descrition');
            $table->bigInteger('grade_category_id');
            $table->foreign('grade_category_id')->references('id')->on('grade_categories');
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
        Schema::dropIfExists('grades');
    }
}
