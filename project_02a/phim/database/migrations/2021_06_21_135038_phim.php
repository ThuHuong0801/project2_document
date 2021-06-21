<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Phim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phim', function (Blueprint $table) 
        {
            $table->increments('ma_phim');
            // $table->unsignedInteger('ma_rap');
            // $table->foreign('ma_rap')->references('ma_rap')->on('rap');
            // $table->unsignedInteger('ma_the_loai');
            // $table->foreign('ma_the_loai')->references('ma_the_loai')->on('the_loai_phim');

            $table->string('ten_phim',50);
            $table->string('dao_dien',50);
            $table->text('mo_ta');
            $table->string('trailler',50);
            $table->dateTime('ngay_khoi_chieu');
            $table->text('binh_luan');
            $table->time('thoi_luong');
            $table->string('trang_thai',30);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('phim');
    }
}