<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProficiencyDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proficiency_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proficiency_id')->unsigned()->nullable();           
            $table->foreign('proficiency_id')->references('id')->on('proficiency');
            $table->integer('matrix_id')->unsigned()->nullable();           
            $table->foreign('matrix_id')->references('id')->on('matrix');
            $table->integer('status_id')->unsigned()->nullable();           
            $table->foreign('status_id')->references('id')->on('status');
            $table->string('scheme_id');
            $table->date('start_date');
            $table->string('range');
            $table->string('number_of_pt');
            $table->string('approx_size');
            $table->text('remaks')->nullable();
            $table->integer('user_id')->unsigned()->nullable();           
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proficiency_detail');
    }
}