<?php

use Illuminate\Database\Seeder;

class ReferensiJenisKelaminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('referensi_jenis_kelamin')->insert([
            'jenis_kelamin' => 'Laki-laki',
        ]);
        DB::table('referensi_jenis_kelamin')->insert([
            'jenis_kelamin' => 'Perempuan',
        ]);
    }
}
