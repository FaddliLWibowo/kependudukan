<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlamatOrganisasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_alamat_organisasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organisasi_id');
            $table->vachar('jalan');
            $table->integer('telp');$this->integer()
            $table->integer('faximile');
            $table->integer('telepon');
            $table->varchar('email',1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_alamat_organisasi', function (Blueprint $table) {
            //
        });
    }
}
