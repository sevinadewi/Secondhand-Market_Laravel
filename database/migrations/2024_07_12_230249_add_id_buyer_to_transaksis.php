<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdBuyerToTransaksis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaksis', function (Blueprint $table) {
            $table->unsignedBigInteger('id_buyer');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksis', function (Blueprint $table) {
            $table->dropColumn('id_buyer');
            //
        });
    }
}
