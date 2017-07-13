<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalytePtDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyte_pt_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pt_detail_id')->unsigned()->nullable();           
            $table->foreign('pt_detail_id')->references('id')->on('pt_detail');
            $table->integer('analyte_id')->unsigned()->nullable();           
            $table->foreign('analyte_id')->references('id')->on('analyte');
            $table->integer('user_id')->unsigned()->nullable();           
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('analyte_pt_detail');
    }
}
