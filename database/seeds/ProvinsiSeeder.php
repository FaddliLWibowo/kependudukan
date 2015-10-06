<?php

use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinsi')->truncate();
        DB::table('provinsi')->insert([
            ['id' => 1, 'kode_provinsi' => '35', 'provinsi' => 'Jawa Timur', 'pbb_prov_kode' => '', 'arsip_prov_kode' => '', 'kodepos_prov_kode' => '', 'ramil_prov_kode' => '', 'created_at' => \Carbon\Carbon::now()],
        ]);
    }
}
