<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalyteProficiencyDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyte_proficiency_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proficiency_detail_id')->unsigned()->nullable();           
            $table->foreign('proficiency_detail_id')->references('id')->on('proficiency_detail');
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
        Schema::dropIfExists('analyte_proficiency_detail');
    }
}
