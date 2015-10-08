<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrtu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ortu', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nik', 16)->unique();
            $table->string('nik_bapak', 16)->unique();
            $table->string('nama_bapak', 55);
            $table->string('status_bapak', 30);
            $table->string('alamat_bapak', 55);
            $table->string('nik_ibu', 16)->unique();
            $table->string('nama_ibu', 55);
            $table->string('status_ibu', 30);
            $table->string('alamat_ibu', 55);
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
        Schema::drop('ortu');
    }
}
