
<?php

use Illuminate\Database\Seeder;
class Kabupaten_Seeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_kabukot')->truncate();
        DB::table('data_kabukot')->insert([

            ['id' => 1, 'kode_provinsi' => '35','kode_kabupaten' => '73','kabupaten' => 'Malang','is_status' =>'2','pbb_kabukot_kode' => '','arsip_kabukot_kode'=> '','kodepos_kabukot_kode' => '', 'ramil_kabukot_kode' => ''],

        ]);
    }
}
