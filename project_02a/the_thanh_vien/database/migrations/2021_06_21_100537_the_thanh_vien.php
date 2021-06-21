<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TheThanhVien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('the_thanh_vien', function (Blueprint $table) {
            $table->increments('ma');#tạo id và primary key vừa auto_increment: kiểu dữ liệu big & unsigned
            $table->boolean('hang_the');
            $table->dateTime('ngay_kich_hoat');
            $table->float('tong_chi_tieu', 8, 2);
            $table->integer('diem_tich_luy');
            $table->integer('diem_da_tieu');
            $table->boolean('trang_thai_the');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('the_thanh_vien');
    }
}

