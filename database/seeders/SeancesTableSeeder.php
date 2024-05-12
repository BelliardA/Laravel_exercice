<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seances')->insert([
            [
                'start_time' => Carbon::now()->addDays(1)->format('Y-m-d H:i:s'),
                'numSalle' => '101',
                'movies_id' => 1,
            ],
            [
                'start_time' => Carbon::now()->addDays(1)->format('Y-m-d H:i:s'),
                'numSalle' => '102',
                'movies_id' => 2,
            ],
            [
                'start_time' => Carbon::now()->addDays(2)->format('Y-m-d H:i:s'),
                'numSalle' => '201',
                'movies_id' => 3,
            ],
            [
                'start_time' => Carbon::now()->addDays(2)->format('Y-m-d H:i:s'),
                'numSalle' => '202',
                'movies_id' => 4,
            ],
        ]);
    }
}
