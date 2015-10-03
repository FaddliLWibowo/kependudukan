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
            $table->string('prov_id');
            $table->varchar('provinsi');
            $table->int('pbb_prov_kode');
            $table->int('arsip_prov_kode');
            $table->int('kodepos_prov_kode');
            $table->int('ramil_prov_kode');
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
