<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('customerCode');#tạo id và primary key vừa auto_increment: kiểu dữ liệu big & unsigned
            $table->string('name',50);#varchar => 225 để nguyên, 50 là độ dài
            $table->string('photo',30);
            $table->boolean('gender');
            $table->date('date_birth');
            $table->string('phone_number', 15);
            $table->string('email')->unique(); #email:kiểu dữ liệu varchar và là duy nhất(unique)
            $table->string('password',20);
            $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customer');
    }
}