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
        Schema::table('banner_iklans', function (Blueprint $table) {
            $table->integer('status_gambar')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banner_iklans', function (Blueprint $table) {
            $table->enum('status_gambar', ['banner', 'iklan'])->change();
        });
    }
};
