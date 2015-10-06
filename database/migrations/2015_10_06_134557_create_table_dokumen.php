<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDokumen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nik', 16)->unique();
            $table->string('jenis_dokumen', 1);
            $table->string('nomor_dokumen', 32);
            $table->string('tempat_terbit', 58);
            $table->string('tanggal_terbit', 16);
            $table->string('nomor_seri', 58);
            $table->string('pejabat', 200);
            $table->boolean('status')->default(0);
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
        Schema::drop('dokumen');
    }
}
