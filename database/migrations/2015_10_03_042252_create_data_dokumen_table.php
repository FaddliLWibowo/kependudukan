<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataDokumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_data_dokumen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik',16)->uniqe();
            $table->string('jenis_dokumen',1);
            $table->string('nomor_dokumen',32);
            $table->string('tempat_terbit',58);
            $table->date('tanggal_terbit',16);
            $table->string('nomor_seri',58);
            $table->string('pejabat',200);
            $table->integer('is_status',1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_data_dokumen', function (Blueprint $table) {
            //
        });
    }
}
