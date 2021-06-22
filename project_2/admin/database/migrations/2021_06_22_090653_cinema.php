<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cinema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cinema', function (Blueprint $table) 
        {
            $table->increments('codeCinema');
            $table->unsignedInteger('codeAdmin');
            $table->foreign('codeAdmin')->references('codeAdmin')->on('admin');
            $table->string('name_cinema',50);
            $table->string('address');
            $table->integer('hotline');
            $table->text('comment');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cinema');
    }
}