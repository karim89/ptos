<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('material_id')->unsigned()->nullable();           
            $table->foreign('material_id')->references('id')->on('material');
            $table->integer('status_id')->unsigned()->nullable();           
            $table->foreign('status_id')->references('id')->on('status');
            $table->string('code');
            $table->string('reference')->nullable();
            $table->text('path')->nullable();
            $table->text('purity')->nullable();
            $table->text('packaging_size')->nullable();
            $table->date('validity_period')->nullable();
            $table->double('price', 15, 2)->nullable();
            $table->integer('availability')->nullable();
            $table->integer('amount_required')->nullable();
            $table->integer('max_quantity_dispath')->nullable();
            $table->string('coa')->nullable();
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
        Schema::dropIfExists('material_detail');
    }
}
