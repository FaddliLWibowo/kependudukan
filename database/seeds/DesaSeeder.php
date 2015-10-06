<?php

use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desa')->truncate();
        DB::table('desa')->insert([
            ['id' => 1, 'kecamatan_id' => '01', 'kode_desa' => '1001', 'desa' => 'Balearjosari', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 2, 'kecamatan_id' => '01', 'kode_desa' => '1002', 'desa' => 'Arjosari', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 3, 'kecamatan_id' => '01', 'kode_desa' => '1003', 'desa' => 'Polowijen', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 4, 'kecamatan_id' => '01', 'kode_desa' => '1004', 'desa' => 'Purwodadi', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 5, 'kecamatan_id' => '01', 'kode_desa' => '1005', 'desa' => 'Blimbing', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 6, 'kecamatan_id' => '01', 'kode_desa' => '1006', 'desa' => 'Pandangwangi', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 7, 'kecamatan_id' => '01', 'kode_desa' => '1007', 'desa' => 'Purwantoro', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 8, 'kecamatan_id' => '01', 'kode_desa' => '1008', 'desa' => 'Bunulrejo', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 9, 'kecamatan_id' => '01', 'kode_desa' => '1009', 'desa' => 'Kesatrian', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 10, 'kecamatan_id' => '01', 'kode_desa' => '1010', 'desa' => 'Polehan', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 11, 'kecamatan_id' => '01', 'kode_desa' => '1011', 'desa' => 'Jodipan', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 12, 'kecamatan_id' => '02', 'kode_desa' => '1001', 'desa' => 'Klojen', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 13, 'kecamatan_id' => '02', 'kode_desa' => '1002', 'desa' => 'Rampalcelaket', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 14, 'kecamatan_id' => '02', 'kode_desa' => '1003', 'desa' => 'Samaan', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 15, 'kecamatan_id' => '02', 'kode_desa' => '1004', 'desa' => 'Kiduldalem', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 16, 'kecamatan_id' => '02', 'kode_desa' => '1005', 'desa' => 'Sukoharjo', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 17, 'kecamatan_id' => '02', 'kode_desa' => '1006', 'desa' => 'Kasin', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 18, 'kecamatan_id' => '02', 'kode_desa' => '1007', 'desa' => 'Kauman', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 19, 'kecamatan_id' => '02', 'kode_desa' => '1008', 'desa' => 'Oro-Oro Dowo', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 20, 'kecamatan_id' => '02', 'kode_desa' => '1009', 'desa' => 'Bareng', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 21, 'kecamatan_id' => '02', 'kode_desa' => '1010', 'desa' => 'Gading Kasri', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 22, 'kecamatan_id' => '02', 'kode_desa' => '1011', 'desa' => 'Penanggunngan', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 23, 'kecamatan_id' => '03', 'kode_desa' => '1001', 'desa' => 'Kotalama', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 24, 'kecamatan_id' => '03', 'kode_desa' => '1002', 'desa' => 'Mergosono', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 25, 'kecamatan_id' => '03', 'kode_desa' => '1003', 'desa' => 'Sumiayu', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 26, 'kecamatan_id' => '03', 'kode_desa' => '1004', 'desa' => 'Wonokoyo', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 27, 'kecamatan_id' => '03', 'kode_desa' => '1005', 'desa' => 'Buring', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 28, 'kecamatan_id' => '03', 'kode_desa' => '1006', 'desa' => 'Kedungkandang', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 29, 'kecamatan_id' => '03', 'kode_desa' => '1007', 'desa' => 'Lesanpuro', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 30, 'kecamatan_id' => '03', 'kode_desa' => '1008', 'desa' => 'Sawojajar', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 31, 'kecamatan_id' => '03', 'kode_desa' => '1009', 'desa' => 'Madyopuro', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 32, 'kecamatan_id' => '03', 'kode_desa' => '1010', 'desa' => 'Cemorokandang', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 33, 'kecamatan_id' => '03', 'kode_desa' => '1011', 'desa' => 'Arjowinangun', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 34, 'kecamatan_id' => '03', 'kode_desa' => '1012', 'desa' => 'Tlogowaru', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 35, 'kecamatan_id' => '04', 'kode_desa' => '1001', 'desa' => 'Ciptomulyo', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 36, 'kecamatan_id' => '04', 'kode_desa' => '1002', 'desa' => 'Gadang', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 37, 'kecamatan_id' => '04', 'kode_desa' => '1003', 'desa' => 'Kebonsari', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 38, 'kecamatan_id' => '04', 'kode_desa' => '1004', 'desa' => 'Bandungrejosari', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 39, 'kecamatan_id' => '04', 'kode_desa' => '1005', 'desa' => 'Sukun', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 40, 'kecamatan_id' => '04', 'kode_desa' => '1006', 'desa' => 'Tanjungrejo', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 41, 'kecamatan_id' => '04', 'kode_desa' => '1007', 'desa' => 'Pisangcandi', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 42, 'kecamatan_id' => '04', 'kode_desa' => '1008', 'desa' => 'Bandulan', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 43, 'kecamatan_id' => '04', 'kode_desa' => '1009', 'desa' => 'Karangbesuki', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 44, 'kecamatan_id' => '04', 'kode_desa' => '1010', 'desa' => 'Mulyorejo', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 45, 'kecamatan_id' => '04', 'kode_desa' => '1011', 'desa' => 'Bakalankrajan', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 46, 'kecamatan_id' => '05', 'kode_desa' => '1001', 'desa' => 'Tunggulwulung', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 47, 'kecamatan_id' => '05', 'kode_desa' => '1002', 'desa' => 'Merjosari', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 48, 'kecamatan_id' => '05', 'kode_desa' => '1003', 'desa' => 'Tlogomas', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 49, 'kecamatan_id' => '05', 'kode_desa' => '1004', 'desa' => 'Dinoyo', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 50, 'kecamatan_id' => '05', 'kode_desa' => '1005', 'desa' => 'Sumbersari', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 51, 'kecamatan_id' => '05', 'kode_desa' => '1006', 'desa' => 'Ketawanggede', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 52, 'kecamatan_id' => '05', 'kode_desa' => '1007', 'desa' => 'Jatimulyo', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 53, 'kecamatan_id' => '05', 'kode_desa' => '1008', 'desa' => 'Tunjungsekar', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 54, 'kecamatan_id' => '05', 'kode_desa' => '1009', 'desa' => 'Mojolangu', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 55, 'kecamatan_id' => '05', 'kode_desa' => '1010', 'desa' => 'Tulusrejo', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 56, 'kecamatan_id' => '05', 'kode_desa' => '1011', 'desa' => 'Lowokwaru', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
            ['id' => 57, 'kecamatan_id' => '05', 'kode_desa' => '1012', 'desa' => 'Tasikmadu', 'status' => '2', 'pbb_kec_kode' => '', 'arsip_kec_kode' => '', 'kodepos_kec_kode' => '', 'ramil_kec_kode' => ''],
        ]);
    }
}
