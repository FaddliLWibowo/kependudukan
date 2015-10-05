<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(Desa_Kelurahan_Seeder::class);
        $this->call(Kabupaten_Seeder::class);
        $this->call(Kecamatan_Seeder::class);
        $this->call(Provinsi_Seeder::class);
    }
}
