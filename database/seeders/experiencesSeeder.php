<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $experiences = [
            [
                'name' => 'Skydiving Adventure',
                'location' => 'Dubai, UAE',
            ],
            [
                'name' => 'Wine Tasting Tour',
                'location' => 'Napa Valley, California, USA',
            ],
            [
                'name' => 'Northern Lights Expedition',
                'location' => 'Tromsø, Norway',
            ],
            [
                'name' => 'Safari Experience',
                'location' => 'Serengeti, Tanzania',
            ],
            [
                'name' => 'Culinary Workshop',
                'location' => 'Bologna, Italy',
            ],
            [
                'name' => 'Scuba Diving',
                'location' => 'Great Barrier Reef, Australia',
            ],
            [
                'name' => 'Hot Air Balloon Ride',
                'location' => 'Capadocia, Turkey',
            ],
            [
                'name' => 'Mountain Hiking',
                'location' => 'Swiss Alps, Switzerland',
            ],
            [
                'name' => 'River Rafting',
                'location' => 'Colorado River, USA',
            ],
            [
                'name' => 'Historical City Tour',
                'location' => 'Rome, Italy',
            ],
        ];

        // Inserisci i dati nella tabella
        DB::table('experiences')->insert($experiences);
    }
}
