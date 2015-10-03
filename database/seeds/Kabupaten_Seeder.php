
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

            ['id' => '', 'prov_id' => '','kabukot_id' =>'','kabukot' => '','is_status' =>'','pbb_kabukot_kode' => '','arsip_kabukot_kode'=> '','kodepos_kabukot_kode' => '', 'ramil_kabukot_kode' => ''],

        ]);
    }
}
