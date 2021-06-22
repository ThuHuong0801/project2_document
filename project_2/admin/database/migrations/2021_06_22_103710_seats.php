<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Seats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seats', function (Blueprint $table) 
        {
            $table->increments('seatCode');
            $table->string('name',50);
            $table->string('status',10);
            $table->integer('number_of_seats');
            $table->unsignedInteger('roomCode');
            $table->foreign('roomCode')->references('roomCode')->on('room');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('seats');
    }
}