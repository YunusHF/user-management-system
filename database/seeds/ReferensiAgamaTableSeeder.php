<?php

use Illuminate\Database\Seeder;

class ReferensiAgamaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('referensi_agama')->insert([
            'agama' => 'Islam',
        ]);
        DB::table('referensi_agama')->insert([
            'agama' => 'Protestan',
        ]);
        DB::table('referensi_agama')->insert([
            'agama' => 'Katolik',
        ]);
        DB::table('referensi_agama')->insert([
            'agama' => 'Budha',
        ]);
        DB::table('referensi_agama')->insert([
            'agama' => 'Hindu',
        ]);
        DB::table('referensi_agama')->insert([
            'agama' => 'Khonghucu',
        ]);
    }
}
