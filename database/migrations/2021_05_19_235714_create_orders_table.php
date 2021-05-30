<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->Increments('id');
            $table->date("OrderDate")->nullable();
            $table->string("ShipPhone")->nullable();
            $table->string("ShipAddress")->nullable();
            $table->Integer("Status")->default(0);
            $table->double("total")->defaul(0);
            $table->string("Note")->nullable();
            $table->integer('KhachHangId')->unsigned();
            $table->foreign('KhachHangId')->references('id')->on('khach_hangs')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
