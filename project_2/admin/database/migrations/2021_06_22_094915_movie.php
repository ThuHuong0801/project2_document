<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie', function (Blueprint $table) 
        {
            $table->increments('movieCode');
            $table->unsignedInteger('codeCinema');
            $table->foreign('codeCinema')->references('codeCinema')->on('cinema');
            $table->unsignedInteger('movieGenreCode');
            $table->foreign('movieGenreCode')->references('movieGenreCode')->on('movie_genre');

            $table->string('name',50);
            $table->string('directors',50);
            $table->text('describe');
            $table->string('trailler',50);
            $table->dateTime('premiere_date');
            $table->text('comment');
            $table->time('movie_length');
            $table->string('status',30);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('movie');
    }
}