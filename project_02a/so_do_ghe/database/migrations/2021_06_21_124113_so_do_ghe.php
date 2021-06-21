<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SoDoGhe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('so_do_ghe', function (Blueprint $table) 
        {
            $table->increments('ma');#tạo id và primary key vừa auto_increment: kiểu dữ liệu big & unsigned
            $table->string('ten',50);
            $table->string('anh_mau',30);
            $table->integer('so_luong_ghe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('so_do_ghe');
    }
}
