<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataDeskelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kecamatan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kecamatan_id', 2);
            $table->string('kode_desa', 4);
            $table->string('desa');
            $table->string('status');
            $table->integer('pbb_kec_kode', 5);
            $table->integer('arsip_kec_kode', 3);
            $table->integer('kodepos_kec_kode,5');
            $table->integer('ramil_kec_kode', 4);
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
        Schema::table('data_deskel', function (Blueprint $table) {
            //
        });
    }
}
