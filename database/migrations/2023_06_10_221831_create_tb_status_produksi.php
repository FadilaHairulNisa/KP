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

            $table->unsignedBigInteger('kab_kota_id');
            $table->foreign('kab_kota_id')->references('id')->on('tb_kab_kota');

            $table->unsignedBigInteger('kec_id');
            $table->foreign('kec_id')->references('id')->on('tb_kec');

            $table->unsignedBigInteger('desa_id');
            $table->foreign('desa_id')->references('id')->on('tb_desa');

            $table->string('nama_kab_kota');
            $table->string('nama_kec');
            $table->string('nama_desa');
            $table->string('nama_perusahaan');
            $table->string('alamat');
            $table->string('produk');
            $table->string('jenis_industri');
            $table->string('tahun_komersil');
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
        Schema::dropIfExists('tb_status_produksi');
    }
};
