<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataKabukotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kabupaten', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('provinsi_id');
            $table->string('kode_kabupaten', 3);
            $table->string('kabupaten');
            $table->string('status');
            $table->string('waktu', 4);
            $table->integer('pbb_kabukot_kode', 2);
            $table->integer('arsip_kabukot_kode', 3);
            $table->integer('kodepos_kabukot_kode', 5);
            $table->integer('ramil_kabukot_kode', 4);
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
        Schema::table('data_kabukot', function (Blueprint $table) {
            //
        });
    }
}
