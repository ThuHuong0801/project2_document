<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->increments('billCode');
            $table->unsignedInteger('cardCode');
            $table->foreign('cardCode')->references('cardCode')->on('card');
            
            $table->dateTime('time');

            $table->unsignedInteger('seatCode');
            $table->foreign('seatCode')->references('seatCode')->on('seats');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bill');
    }
}
