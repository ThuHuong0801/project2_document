<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('codeAdmin');#tạo id và primary key vừa auto_increment: kiểu dữ liệu big & unsigned
            $table->string('name',50);#varchar => 225 để nguyên, 50 là độ dài
            $table->boolean('gender');
            $table->string('phone_number', 15);
            $table->string('email')->unique(); #email:kiểu dữ liệu varchar và là duy nhất(unique)
            $table->string('passwword',20);
            $table->smallInteger('level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admin');
    }
}