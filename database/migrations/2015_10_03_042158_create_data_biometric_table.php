<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataBiometricTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_data_biometric', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik',16)->uniqe();
            $table->tinyInteger('foto',58);
            $table->tinyInteger('tanda tangan',1);
            $table->string('iris_mata_kanan',200);
            $table->string('iris_mata_kiri',16)->uniqe();
            $table->string('kelingking_kiri',58);
            $table->integer('manis_kiri',1);
            $table->string('tengah_kiri',200);
            $table->string('petunjuk_kiri',200);
            $table->string('jempol_kiri',200);
            $table->string('kelingking_kanan',58);
            $table->integer('manis_kanan',1);
            $table->string('tengah_kanan',200);
            $table->string('petunjuk_kanan',200);
            $table->string('jempol_kanan',200);
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
        Schema::table('data_data_biometric', function (Blueprint $table) {
            //
        });
    }
}
