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
        Schema::create('produks', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_produk', 50);
            $table->string('deskripsi_produk', 100);
            $table->string('Harga', 100);
            $table->string('diskon', 7)->nullable();
            $table->string('gambar', 100);
            $table->string('pesan', 100);
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
        Schema::dropIfExists('produks');
    }
};
