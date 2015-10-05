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
        Schema::table('mutasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik', 16)->unique();
            $table->string('alamat', 1);
            $table->string('rt', 3);
            $table->string('rw', 20);
            $table->string('dusun');
            $table->integer('desa_id', 5);
            $table->integer('status', 1);
            $table->timestamps();
        });
    }

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
