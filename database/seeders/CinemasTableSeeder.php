<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CinemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cinemas')->insert([
            [
                'name' => 'Cinema Paradiso',
                'address' => '123 Rue du Cinéma',
                'phone' => '0123456789',
            ],
            [
                'name' => 'Cineplex',
                'address' => '456 Avenue du Film',
                'phone' => '0987654321',
            ],
            [
                'name' => 'Star Cinemas',
                'address' => '789 Boulevard des Étoiles',
                'phone' => '1112223333',
            ],
            [
                'name' => 'Metroplex',
                'address' => '1010 Cinema Lane',
                'phone' => '4445556666',
            ],
        ]);
    }
}
