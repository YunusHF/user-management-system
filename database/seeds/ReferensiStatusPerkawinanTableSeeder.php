<?php

use Illuminate\Database\Seeder;

class ReferensiStatusPerkawinanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('referensi_status_perkawinan')->insert([
            'status_perkawinan' => 'Kawin',
        ]);
        DB::table('referensi_status_perkawinan')->insert([
            'status_perkawinan' => 'Belum Kawin',
        ]);
    }
}
