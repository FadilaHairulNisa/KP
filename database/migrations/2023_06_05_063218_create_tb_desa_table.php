<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_desa', function (Blueprint $table) {
            $table->id();
            $table->string('kode_desa');
            $table->string('nama_desa');
            $table->unsignedBigInteger('id_kec');
            $table->unsignedBigInteger('id_kab');

            $table->foreign('id_kec')->references('id')->on('tb_kec');
            $table->foreign('id_kab')->references('id')->on('tb_kab_kota');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_desa');
    }
};
