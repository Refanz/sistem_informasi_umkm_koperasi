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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id');
            $table->string('nama_usaha');
            $table->string('bidang_usaha');
            $table->string('jenis_produk');
            $table->string('nib_oss', 15);
            $table->string('no_pendataan_umkm', 20);
            $table->string('alamat_usaha');
            $table->string('kelurahan_usaha');
            $table->string('kecamatan_usaha');
            $table->string('omset');
            $table->string('asset');
            $table->string('kapasitas_produksi');
            $table->string('tenaga_kerja');
            $table->string('cakupan_wilayah_pemasaran');
            $table->string('jenis_pemasaran');
            $table->string('izin_usaha');
            $table->string('permodalan_usaha');
            $table->string('permasalahan_usaha');
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
        Schema::dropIfExists('jobs');
    }
};
