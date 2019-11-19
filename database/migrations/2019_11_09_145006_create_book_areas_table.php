<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_areas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('book_id')->unique();
            $table->bigInteger('area_id');
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('area_id')
                ->references('id')->on('areas');
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
        Schema::dropIfExists('book_areas');
    }
}
