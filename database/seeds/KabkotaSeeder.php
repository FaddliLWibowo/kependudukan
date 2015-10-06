<?php

use Illuminate\Database\Seeder;

class KabkotaSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kabkot')->truncate();
        DB::table('kabkot')->insert([
            ['id' => 1, 'provinsi_id' => '35', 'kode_kabupaten' => '73', 'kabupaten' => 'Malang', 'is_status' => '2', 'pbb_kabukot_kode' => '', 'arsip_kabukot_kode' => '', 'kodepos_kabukot_kode' => '', 'ramil_kabukot_kode' => ''],
        ]);
    }
}
