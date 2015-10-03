<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataDeskelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_deskel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('camat_id',2);
            $table->string('deskel_id',4);
            $table->vachar('deskel',200);
            $table->integer('is_status');$this->integer()
            $table->integer('pbb_kec_kode',5);
            $table->integer('arsip_kec_kode',3);
            $table->integer('kodepos_kec_kode,5');
            $table->integer('ramil_kec_kode',4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_deskel', function (Blueprint $table) {
            //
        });
    }
}
