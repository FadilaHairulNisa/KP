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
        Schema::create('tb_status_produksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_desa');
            $table->unsignedBigInteger('id_kategori');
            $table->string('nama_perusahaan');
            $table->string('alamat');
            $table->string('produk');
            $table->string('tahun_komersil');
            $table->timestamps();

            $table->foreign('id_desa')->references('id')->on('tb_desa');
            $table->foreign('id_kategori')->references('id')->on('table_kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_status_produksi');
    }
};
