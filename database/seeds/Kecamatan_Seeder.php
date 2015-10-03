<?php

use Illuminate\Database\Seeder;
class Kecamatan_Seeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_kecamatan')->truncate();
        DB::table('data_kecamatan')->insert([

            ['id' => '', 'kabukot_id' => '','camat_id' =>'','kecamatan' => '','pbb_kec_kode' => '','arsip_kec_kode'=> '','kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],

        ]);
    }
}
