<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([[
            'title' => 'Interstellar',
            'year' => '2012',
            'director_id' => 2,
            'country_id' => 1,
            ],[
            'title' => 'Stars Wars II',
            'year' => '1998',
            'director_id' => 1,
            'country_id' => 2,
            ]
            ,[
            'title' => 'High School',
            'year' => '2000',
            'director_id' => 1,
            'country_id' => 2,
            ]
            ,[
            'title' => 'Avatar',
            'year' => '1998',
            'director_id' => 3,
            'country_id' => 4,
            ]
            ,[
            'title' => '21 jump street',
            'year' => '2018',
            'director_id' => 4,
            'country_id' => 1,
            ]]);
    }
}
