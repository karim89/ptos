<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasketPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basket_payment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('payment_id')->unsigned()->nullable();           
            $table->foreign('payment_id')->references('id')->on('payment');
            $table->integer('basket_id')->unsigned()->nullable();           
            $table->foreign('basket_id')->references('id')->on('basket');
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
        Schema::dropIfExists('basket_payment');
    }
}
