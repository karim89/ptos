<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePtDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pt_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pt_id')->unsigned()->nullable();           
            $table->foreign('pt_id')->references('id')->on('pt');
            $table->integer('matrix_id')->unsigned()->nullable();           
            $table->foreign('matrix_id')->references('id')->on('matrix');
            $table->integer('status_id')->unsigned()->nullable();           
            $table->foreign('status_id')->references('id')->on('status');
            $table->string('scheme_id');
            $table->date('start_date')->nullable();
            $table->integer('start_month')->nullable();
            $table->double('range_from', 15, 2)->nullable();
            $table->double('range_to', 15, 2)->nullable();
            $table->integer('number_of_pt')->nullable();
            $table->integer('approx');
            $table->integer('quantity');
            $table->double('price', 15, 2)->nullable();
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('pt_detail');
    }
}
