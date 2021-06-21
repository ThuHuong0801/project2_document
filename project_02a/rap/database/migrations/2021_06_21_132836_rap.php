<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rap', function (Blueprint $table) 
        {
            $table->increments('ma_rap');
            // $table->unsignedInteger('ma');
            // $table->foreign('ma')->references('ma')->on('admin');
            $table->string('ten_rap',50);
            $table->string('dia_chi');
            $table->integer('hotline');
            $table->text('binh_luan');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rap');
    }
}

