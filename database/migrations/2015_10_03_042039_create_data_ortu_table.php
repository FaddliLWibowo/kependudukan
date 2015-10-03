<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataOrtuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_data_ortu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik',16)->uniqe();
            $table->string('nik_bapak',16)->uniqe();
            $table->string('nama_bapak',58);
            $table->integer('status_bapak',1);
            $table->string('alamat_bapak',200);
            $table->string('nik_ibu',16)->uniqe();
            $table->string('nama_ibu',58);
            $table->integer('status_ibu',1);
            $table->string('alamat_ibu',200);
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
        Schema::table('data_data_ortu', function (Blueprint $table) {
            //
        });
    }
}
