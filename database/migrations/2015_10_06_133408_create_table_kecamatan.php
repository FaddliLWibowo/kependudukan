<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKecamatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('kabupaten_id');
            $table->string('kode_kecamatan', 2);
            $table->string('kecamatan', 200);
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
        Schema::drop('kecamatan');
    }
}
