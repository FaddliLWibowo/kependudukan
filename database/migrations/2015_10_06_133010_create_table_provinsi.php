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
            $table->increments('id')->unsigned();
            $table->unsignedInteger('kode_provinsi');
            $table->string('provinsi');
            $table->unsignedInteger('pbb_prov_kode');
            $table->unsignedInteger('arsip_prov_kode');
            $table->unsignedInteger('kodepos_prov_kode');
            $table->unsignedInteger('ramil_prov_kode');
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
