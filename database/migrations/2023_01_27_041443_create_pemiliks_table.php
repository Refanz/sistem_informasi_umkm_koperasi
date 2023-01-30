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
        Schema::create('tb_pemilik', function (Blueprint $table) {
            $table->id('id_pemilik');
            $table->string('nama_pemilik');
            $table->string('alamat_pemilik');
            $table->string('kelurahan_pemilik');
            $table->string('kecamatan_pemilik');
            $table->string('no_telepon');
            $table->string('email');
            $table->string("sosial_media");
            $table->string('pendidikan_terakhir');
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
        Schema::dropIfExists('tb_pemilik');
    }
};
