<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KhachHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khach_hang', function (Blueprint $table) {
            $table->increments('ma');#tạo id và primary key vừa auto_increment: kiểu dữ liệu big & unsigned
            $table->string('ten',50);#varchar => 225 để nguyên, 50 là độ dài
            $table->string('anh',30);
            $table->boolean('gioi_tinh');
            $table->date('ngay_sinh');
            $table->string('sdt', 15);
            $table->string('email')->unique(); #email:kiểu dữ liệu varchar và là duy nhất(unique)
            $table->string('mat_khau',20);
            $table->string('dia_chi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('khach_hang');
    }
}
