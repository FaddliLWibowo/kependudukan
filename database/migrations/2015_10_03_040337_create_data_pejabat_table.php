<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPejabatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pejabat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organisasi_id');
            $table->string('nama', 60);
            $table->integer('nip', 28);
            $table->integer('pangkat', 1);
            $table->integer('jabatan', 1);
            $table->string('keterangan');
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
        Schema::table('data_pejabat', function (Blueprint $table) {
            //
        });
    }
}
