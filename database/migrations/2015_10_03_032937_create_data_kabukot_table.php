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
            $table->string('prov_id', 2);
            $table->string('kabukot_id', 2);
            $table->string('kabukot', 200);
            $table->integer('is_status');
            $table->integer('is_waktu', 3);
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
