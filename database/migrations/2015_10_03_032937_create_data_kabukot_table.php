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
        Schema::table('data_kabukot', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prov_id');
            $table->string('kabukot_id');$this->integer()
            $table->vachar('kabukot');
            $table->integer('is_status');
            $table->integer('is_waktu');
            $table->integer('pbb_kabukot_kode');
            $table->integer('arsip_kabukot_kode');
            $table->integer('kodepos_kabukot_kode');
            $table->integer('ramil_kabukot_kode');
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
