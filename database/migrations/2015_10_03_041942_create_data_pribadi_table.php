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
        Schema::table('pribadi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('keluarga_id', 18);
            $table->string('nik', 25)->unique();
            $table->string('title_depan', 20);
            $table->string('title_belakang', 20);
            $table->string('nama', 200);
            $table->integer('kelamin', 1);
            $table->string('tempat_lahir', 86);
            $table->string('tanggal_lahir', 4);
            $table->integer('golongan_darah', 2);
            $table->integer('agama', 1);
            $table->integer('status_kawin', 1);
            $table->integer('status_keluarga', 1);
            $table->integer('pendidikan', 2);
            $table->integer('pekerjaan', 2);
            $table->integer('is_status', 1);
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
