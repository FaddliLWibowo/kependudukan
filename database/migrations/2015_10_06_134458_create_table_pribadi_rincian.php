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
            $table->string('kelainan_fisik');
            $table->string('cacat_fisik');
            $table->string('warga_negara', 120);
            $table->string('website', 86);
            $table->string('email', 86);
            $table->string('telp', 20);
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
