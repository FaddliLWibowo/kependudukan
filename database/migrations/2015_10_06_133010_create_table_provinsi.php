<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProvinsi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinsi', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('kode_provinsi');
            $table->string('provinsi');
            $table->integer('pbb_prov_kode');
            $table->integer('arsip_prov_kode');
            $table->integer('kodepos_prov_kode');
            $table->integer('ramil_prov_kode');
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
        Schema::drop('provinsi');
    }
}
