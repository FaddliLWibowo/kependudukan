<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBiometric extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biometric', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nik', 16)->unique();
            $table->string('foto');
            $table->string('tanda tangan');
            $table->text('iris_mata_kanan')->nullable();
            $table->text('iris_mata_kiri')->nullable();
            $table->text('kelingking_kiri')->nullable();
            $table->text('manis_kiri')->nullable();
            $table->text('tengah_kiri')->nullable();
            $table->text('telunjuk_kiri')->nullable();
            $table->text('jempol_kiri')->nullable();
            $table->text('kelingking_kanan')->nullable();
            $table->text('manis_kanan')->nullable();
            $table->text('tengah_kanan')->nullable();
            $table->text('telunjuk_kanan')->nullable();
            $table->text('jempol_kanan')->nullable();
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
        Schema::drop('biometric');
    }
}
