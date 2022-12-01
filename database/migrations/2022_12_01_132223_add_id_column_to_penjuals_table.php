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
        Schema::table('penjuals', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->after('id_penjual')->required();
            $table->foreign('id')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penjuals', function (Blueprint $table) {
            $table->dropForeign(['id']);
            $table->dropColumn('id');
        });
    }
};
