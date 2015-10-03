<?php

use Illuminate\Database\Seeder;

class Provinsi_Seeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public
    function run()
    {
        DB::table('data_provinsi')->truncate();
        DB::table('data_provinsi')->insert([

            ['id' => 1, 'prov_id' => '01', 'provinsi' => 'Aceh', 'pbb_prov_kode' => '', 'arsip_prov_kode' => '', 'kodepos_prov_kode' => '', 'ramil_prov_kode' => '', 'created_at' => \Carbon\Carbon::now()],

        ]);
    }
}
