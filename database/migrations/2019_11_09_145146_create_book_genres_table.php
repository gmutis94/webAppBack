<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_genres', function (Blueprint $table) {
            $table->bigInteger('book_id');
            $table->bigInteger('literary_genre_id');
            $table->primary(['book_id','literary_genre_id']);
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('literary_genre_id')->references('id')->on('literary_genres');
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
        Schema::dropIfExists('book_genres');
    }
}
