<?php

use Illuminate\Database\Seeder;
class Desa_Kelurahan_Seeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_deskel')->truncate();
        DB::table('data_deskel')->insert([

            ['id' => '', 'kabukot_id' => '','camat_id' =>'','kecamatan' => '','pbb_kec_kode' => '','arsip_kec_kode'=> '','kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
        ]);
    }
}
