<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiteraryGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('literary_genres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('detail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migratio2019_11_09_144637_create_literary_generes_tableSSSns.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('literary_genres');
    }
}
