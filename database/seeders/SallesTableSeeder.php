<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  


class SallesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('salles')->insert([
            [
                'numSalle' => '101',
                'capacite' => 50,
                'cinema_id' => 1,
            ],
            [
                'numSalle' => '102',
                'capacite' => 60,
                'cinema_id' => 1,
            ],
            [
                'numSalle' => '201',
                'capacite' => 70,
                'cinema_id' => 2,
            ],
            [
                'numSalle' => '202',
                'capacite' => 80,
                'cinema_id' => 2,
            ],
        ]);
    }
}
