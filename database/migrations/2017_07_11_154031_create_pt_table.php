<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pt', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('scheme_id')->unsigned()->nullable();           
            $table->foreign('scheme_id')->references('id')->on('scheme');
            $table->integer('status_id')->unsigned()->nullable();           
            $table->foreign('status_id')->references('id')->on('status');
            $table->string('code');
            $table->string('name');
            $table->integer('size_id')->unsigned()->nullable();           
            $table->foreign('size_id')->references('id')->on('size');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('pt');
    }
}
