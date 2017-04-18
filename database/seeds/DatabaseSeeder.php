<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ReferensiPeranTableSeeder::class);
        $this->call(ReferensiAgamaTableSeeder::class);
        $this->call(ReferensiJenisKelaminTableSeeder::class);
        $this->call(ReferensiStatusPerkawinanTableSeeder::class);
    }
}
