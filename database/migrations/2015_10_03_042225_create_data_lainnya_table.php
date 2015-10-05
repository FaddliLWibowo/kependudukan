<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataLainnyaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lainnya', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik', 16)->uniqe();
            $table->string('kelainan_fisik', 1);
            $table->string('cacat_fisik', 1);
            $table->string('warga_negara', 120);
            $table->string('website', 86);
            $table->string('email', 86);
            $table->string('phone', 20);
            $table->integer('status', 1);
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
        Schema::table('data_data_lainnya', function (Blueprint $table) {
            //
        });
    }
}
