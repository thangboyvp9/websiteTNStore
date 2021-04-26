<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhuKiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phu_kiens', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('MaSP');
            $table->string('TenSP');
            
            $table->string('DonVi');
            $table->string('MoTa');
            $table->string('HinhAnh');
            $table->string('DonGia');
            $table->Integer('MaLoai')->unsigned();
            $table->foreign('MaLoai')->references('MaLoaiSP')->on('loai_p_k_s')->onDelete('cascade');
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
        Schema::dropIfExists('phu_kiens');
    }
}
