<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePribadi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pribadi', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('keluarga_id', 18);
            $table->string('nik', 25)->unique();
            $table->string('title_depan', 20)->nullable();
            $table->string('title_belakang', 20)->nullable();
            $table->string('nama');
            $table->string('kelamin');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('golongan_darah')->nullable();
            $table->string('agama');
            $table->string('status_kawin');
            $table->string('status_keluarga');
            $table->string('pendidikan')->nullable();
            $table->string('pekerjaan')->nullable();
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
        Schema::drop('pribadi');
    }
}
