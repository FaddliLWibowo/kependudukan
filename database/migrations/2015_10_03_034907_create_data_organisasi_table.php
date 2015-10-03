<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataOrganisasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_organisasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organisasi_id');
            $table->string('user_name',60);
            $table->integer('provinsi_id',2);
            $table->integer('camat_id',2);
            $table->integer('deskel_id',4);
            $table->integer('is_level')->default(1);
            $table->varchar('email')->uniqe();
            $table->vachar('password',60);
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
        Schema::table('data_organisasi', function (Blueprint $table) {
            //
        });
    }
}
