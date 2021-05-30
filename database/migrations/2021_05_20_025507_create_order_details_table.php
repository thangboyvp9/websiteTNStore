<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('OrderId')->unsigned();
            $table->foreign('OrderId')->references('id')->on('Orders')->onDelete('cascade');
            $table->integer('PhuKienId')->unsigned();
            $table->foreign('PhuKienId')->references('id')->on('phu_kiens')->onDelete('cascade');
            $table->Integer("Quantity")->default(0);
            $table->double("UnitPrice")->default(0);
            $table->date("AddDate")->nullable();
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
        Schema::dropIfExists('order_details');
    }
}
