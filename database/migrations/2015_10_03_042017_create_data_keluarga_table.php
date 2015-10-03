<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_data_keluarga', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kk_id',18);
            $table->string('nik_kk',16)->uniqe();
            $table->string('nama_kk',20);
            $table->string('alamat',200);
            $table->string('rt',3);
            $table->string('rw',3);
            $table->string('dusun',120);
            $table->string('phone',20);
            $table->integer('is_status',1);
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
        Schema::table('data_data_keluarga', function (Blueprint $table) {
            //
        });
    }
}
