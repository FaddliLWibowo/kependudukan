<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDesa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desa', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('kecamatan_id', 2);
            $table->string('kode_desa', 4);
            $table->string('desa');
            $table->string('status');
            $table->integer('pbb_kec_kode');
            $table->integer('arsip_kec_kode');
            $table->integer('kodepos_kec_kode');
            $table->integer('ramil_kec_kode');
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
        Schema::drop('desa');
    }
}
