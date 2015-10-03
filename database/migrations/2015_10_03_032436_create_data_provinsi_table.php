<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataProvinsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_provinsi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prov_id',2);
            $table->varchar('provinsi',200);
            $table->int('pbb_prov_kode',2);
            $table->int('arsip_prov_kode',3);
            $table->int('kodepos_prov_kode',5;
            $table->int('ramil_prov_kode',4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_provinsi', function (Blueprint $table) {
            //
        });
    }
}
