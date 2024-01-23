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
        Schema::create('hilangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('no_tel');
            $table->string('lokasi');
            $table->date('tanggal');
            $table->longText('deskripsi');
            $table->string('slug')->unique();
            $table->string('gambar');
            $table->string('status');
            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('SET NULL');
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
        Schema::dropIfExists('hilangs');
    }
};
