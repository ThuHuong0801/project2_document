<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Phong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phong', function (Blueprint $table) 
        {
            $table->increments('ma_phong');
            // $table->unsignedInteger('ma_rap');
            // $table->foreign('ma_rap')->references('ma_rap')->on('rap');
            // $table->unsignedInteger('ma_so_do_phong');
            // $table->foreign('ma_so_do_phong')->references('ma_so_do_phong')->on('so_do_phong');
            // $table->unsignedInteger('ma_so_do_ghe');
            // $table->foreign('ma_so_do_ghe')->references('ma_so_do_ghe')->on('so_do_ghe');
            //$table->unsignedInteger('ma_loai_phong');
            // $table->foreign('ma_loai_phong')->references('ma_loai_phong')->on('loai_phong');
            $table->string('ten_phong',50);
            $table->integer('tang');
            $table->boolean('trang_thai');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('phong');
    }
}
