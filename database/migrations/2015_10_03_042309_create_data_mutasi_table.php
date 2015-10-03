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
        Schema::table('data_data_mutasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik', 16)->unique();
            $table->string('alamat', 1);
            $table->string('rt', 1);
            $table->string('rw', 120);
            $table->string('dusun', 86);
            $table->integer('prov_id', 1);
            $table->integer('kabkot_id', 1);
            $table->integer('camat_id', 1);
            $table->integer('deskel_id', 1);
            $table->integer('is_status', 1);
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
