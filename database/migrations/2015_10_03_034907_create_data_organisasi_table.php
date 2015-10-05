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
        Schema::table('organisasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organisasi_id');
            $table->string('user_id', 60);
            $table->integer('desa_id', 2);
            $table->integer('level')->default(1);
            $table->string('email')->unique();
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
