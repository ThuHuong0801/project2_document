<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Card extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card', function (Blueprint $table) {
            $table->increments('cardCode');

            $table->unsignedInteger('customerCode');
            $table->foreign('customerCode')->references('customerCode')->on('customer');

            $table->boolean('grade_cards');
            $table->dateTime('activation_date');
            $table->float('total_money', 8, 2);
            $table->integer('accumulated_points');
            $table->integer('spent_points');
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
        Schema::drop('card');
    }
}