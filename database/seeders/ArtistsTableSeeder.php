<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artists')->insert([[
            'name' => 'Coppola',
            'firstname' => 'Francis Ford',
            'birthdate' => 1939,
            'country_id' => 2,
            ],[
            'name' => 'Snoop',
            'firstname' => 'Dogg',
            'birthdate' => 1946,
            'country_id' => 1,
            ],[
            'name' => 'Besson',
            'firstname' => 'Luc',
            'birthdate' => 2000,
            'country_id' => 5,
            ],[
            'name' => 'Became',
            'firstname' => 'David',
            'birthdate' => 1949,
            'country_id' => 4,
            ]]);
    }
}
