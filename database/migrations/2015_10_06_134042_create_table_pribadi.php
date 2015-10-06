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
            $table->string('title_depan', 20);
            $table->string('title_belakang', 20);
            $table->string('nama', 200);
            $table->string('kelamin');
            $table->string('tempat_lahir', 86);
            $table->string('tanggal_lahir', 4);
            $table->string('golongan_darah', 2);
            $table->string('agama');
            $table->string('status_kawin');
            $table->string('status_keluarga');
            $table->string('pendidikan');
            $table->string('pekerjaan');
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
