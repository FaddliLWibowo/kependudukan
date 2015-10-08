<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKabkot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabkot', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('provinsi_id');
            $table->string('kode_kabupaten', 3);
            $table->string('kabupaten');
            $table->integer('is_status');
            $table->string('waktu', 4);
            $table->integer('pbb_kabukot_kode');
            $table->integer('arsip_kabukot_kode');
            $table->integer('kodepos_kabukot_kode');
            $table->integer('ramil_kabukot_kode');
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
        Schema::drop('kabkot');
    }
}
