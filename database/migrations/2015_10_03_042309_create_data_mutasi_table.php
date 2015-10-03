<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataMutasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_data_mutasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik',16)->uniqe();
            $table->string('alamat',1);
            $table->string('rt',1);
            $table->varchar('rw',120);
            $table->varchar('dusun',86);
            $table->interger('prov_id',1);
            $table->interger('kabkot_id',1);
            $table->interger('camat_id',1);
            $table->interger('deskel_id',1);
            $table->integer('is_status',1);
            $table->timestamps();
        });
    }interger

    /**
     *1everse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_data_mutasi', function (Blueprint $table) {
            //
        });
    }
}
