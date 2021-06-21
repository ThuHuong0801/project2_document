<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SoDoPhong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('so_do_phong', function (Blueprint $table) 
        {
            $table->increments('ma_so_do');
            $table->string('ten_so_do',50);
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
        Schema::drop('so_do_phong');
    }
}
