<?php

use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kecamatan')->truncate();
        DB::table('kecamatan')->insert([
            ['id' => 1, 'kabupaten_id' => '73', 'kode_kecamatan' => '01', 'kecamatan' => 'Blimbing', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 2, 'kabupaten_id' => '73', 'kode_kecamatan' => '02', 'kecamatan' => 'Klojen', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 3, 'kabupaten_id' => '73', 'kode_kecamatan' => '03', 'kecamatan' => 'Kedungkandang', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 4, 'kabupaten_id' => '73', 'kode_kecamatan' => '04', 'kecamatan' => 'Sukun', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 5, 'kabupaten_id' => '73', 'kode_kecamatan' => '05', 'kecamatan' => 'Lowokwaru', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
        ]);
    }
}
