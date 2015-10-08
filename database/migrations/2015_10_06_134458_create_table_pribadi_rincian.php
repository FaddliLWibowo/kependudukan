<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePribadiRincian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pribadi_rincian', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nik', 16)->unique();
            $table->string('kelainan_fisik')->nullable();
            $table->string('cacat_fisik')->nullable();
            $table->string('warga_negara', 35);
            $table->string('website', 85)->nullable();
            $table->string('email', 85)->nullable();
            $table->string('telp', 20)->nullable();
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
        Schema::drop('pribadi_rincian');
    }
}
