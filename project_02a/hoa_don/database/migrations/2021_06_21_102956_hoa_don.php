<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HoaDon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->increments('ma');#tạo id và primary key vừa auto_increment: kiểu dữ liệu big & unsigned
            $table->dateTime('thoi_gian_mua');
            $table->float('tong_chi_tieu', 8, 2);
            // $table->unsignedInteger('ma');
            // $table->foreign('ma')->references('ma')->on('the_thanh_vien');

            // $table->unsignedInteger('ma_ghe');
            // $table->foreign('ma_ghe')->references('ma_ghe')->on('ghe');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hoa_don');
    }
}
