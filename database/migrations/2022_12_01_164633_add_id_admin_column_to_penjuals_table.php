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
            $table->unsignedBigInteger('id_admin')->after('id')->required();
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
        Schema::table('penjuals', function (Blueprint $table) {
            $table->dropForeign(['id_admin']);
            $table->dropColumn('id_admin');
        });
    }
};
