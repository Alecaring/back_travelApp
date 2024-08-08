<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
        ];

        DB::table('experiences')->insert($experiences);
    }
}
