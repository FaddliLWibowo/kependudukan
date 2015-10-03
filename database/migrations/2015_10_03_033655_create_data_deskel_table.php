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
            $table->string('camat_id');
            $table->vachar('deskel');
            $table->integer('is_status');$this->integer()
            $table->integer('pbb_kec_kode');
            $table->integer('arsip_kec_kode');
            $table->integer('kodepos_kec_kode');
            $table->integer('ramil_kec_kode');
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
