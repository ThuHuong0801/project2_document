  
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Room extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function (Blueprint $table) 
        {
            $table->increments('roomCode');
            $table->unsignedInteger('codeCinema');
            $table->foreign('codeCinema')->references('codeCinema')->on('cinema');
            $table->unsignedInteger('floorplansCode');
            $table->foreign('floorplansCode')->references('floorplansCode')->on('floorplans');
            $table->unsignedInteger('diagramSeatCode');
            $table->foreign('diagramSeatCode')->references('diagramSeatCode')->on('diagram_seat');
            $table->unsignedInteger('roomTypeCode');
            $table->foreign('roomTypeCode')->references('roomTypeCode')->on('room_type');
            $table->string('name',50);
            $table->integer('floors');
            $table->boolean('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('room');
    }
}
