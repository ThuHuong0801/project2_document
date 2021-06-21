<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ghe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ghe', function (Blueprint $table) 
        {
            $table->increments('ma_ghe');
            $table->string('ten',50);
            $table->string('tinh_trang',10);
            $table->integer('so_luong_ghe');
            // $table->unsignedInteger('ma');
            // $table->foreign('ma')->references('ma')->on('phong');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ghe');
    }
}
