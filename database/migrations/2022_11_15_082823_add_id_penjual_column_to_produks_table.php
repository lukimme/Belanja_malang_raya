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
        Schema::table('produks', function (Blueprint $table) {
            $table->unsignedBigInteger('id_penjual')->after('id')->required();
            $table->foreign('id_penjual')->references('id')->on('penjuals')->onDelete('cascade');
            
            $table->unsignedBigInteger('id_kategori')->after('id_penjual')->required();
            $table->foreign('id_kategori')->references('id')->on('kategoris');

            $table->unsignedBigInteger('id_admin')->after('id_kategori')->required();
            $table->foreign('id_admin')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produks', function (Blueprint $table) {
            $table->dropForeign(['id_penjual']);
            $table->dropColumn('id_penjual');
            $table->dropForeign(['id_kategori']);
            $table->dropColumn('id_kategori');
            $table->dropForeign(['id_admin']);
            $table->dropColumn('id_admin');
        });
    }
};
