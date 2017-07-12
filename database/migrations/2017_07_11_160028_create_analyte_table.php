<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalyteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyte', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status_id')->unsigned()->nullable();           
            $table->foreign('status_id')->references('id')->on('status');
            $table->string('code');
            $table->string('name');
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
        Schema::dropIfExists('analyte');
    }
}
