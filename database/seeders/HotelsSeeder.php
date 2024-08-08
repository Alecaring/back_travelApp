<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class hotelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Dati di esempio per la tabella hotels
        $hotels = [
            [
                'Name' => 'Hotel Paradise',
                'City' => 'Rome',
                'Address' => 'Via del Corso 10',
                'Latitude' => 41.9028,
                'Longitude' => 12.4964,
            ],
            [
                'Name' => 'Grand Hotel Central',
                'City' => 'New York',
                'Address' => '5th Avenue 1',
                'Latitude' => 40.7128,
                'Longitude' => -74.0060,
            ],
            [
                'Name' => 'Sea View Hotel',
                'City' => 'Sydney',
                'Address' => 'Bondi Beach',
                'Latitude' => -33.8688,
                'Longitude' => 151.2093,
            ],
            [
                'Name' => 'Mountain Retreat',
                'City' => 'Denver',
                'Address' => 'Mountain Road 123',
                'Latitude' => 39.7392,
                'Longitude' => -104.9903,
            ],
        ];

        // Inserimento dei dati nella tabella hotels
        DB::table('hotels')->insert($hotels);
    }
}
