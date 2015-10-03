<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPribadiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_data_pribadi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kk_id',18);
            $table->string('nik',16)->uniqe();
            $table->varchar('title_depan',20);
            $table->varchar('title_belakang',20);
            $table->varchar('nama',200);
            $table->integer('kelamin',1);
            $table->vachar('tempat_lahir',86);
            $table->date('tanggal_lahir',4);
            $table->integer('gol_darah',2);
            $table->integer('agama',1);
            $table->integer('status_kawin',1);
            $table->integer('status_keluarga',1);
            $table->integer('pendidikan',2);
            $table->integer('pekerjaan',2);
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
        Schema::table('data_data_pribadi', function (Blueprint $table) {
            //
        });
    }
}
