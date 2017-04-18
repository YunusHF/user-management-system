<?php

use Illuminate\Database\Seeder;

class ReferensiPeranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('referensi_peran')->insert([
            'peran' => 'member',
        ]);
        DB::table('referensi_peran')->insert([
            'peran' => 'admin',
        ]);
    }
}
