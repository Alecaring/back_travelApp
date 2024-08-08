<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $flights = [
            [
                'airlineName' => 'American Airlines',
                'sourceCity' => 'New York',
                'destinationCity' => 'Los Angeles',
                'departureTime' => '2024-08-10 08:00:00',
                'arrivalTime' => '2024-08-10 11:00:00',
            ],
            [
                'airlineName' => 'British Airways',
                'sourceCity' => 'London',
                'destinationCity' => 'Paris',
                'departureTime' => '2024-08-10 09:00:00',
                'arrivalTime' => '2024-08-10 10:30:00',
            ],
            [
                'airlineName' => 'Lufthansa',
                'sourceCity' => 'Frankfurt',
                'destinationCity' => 'Berlin',
                'departureTime' => '2024-08-10 07:00:00',
                'arrivalTime' => '2024-08-10 08:15:00',
            ],
            [
                'airlineName' => 'Air France',
                'sourceCity' => 'Paris',
                'destinationCity' => 'New York',
                'departureTime' => '2024-08-10 14:00:00',
                'arrivalTime' => '2024-08-10 17:30:00',
            ],
            [
                'airlineName' => 'Emirates',
                'sourceCity' => 'Dubai',
                'destinationCity' => 'Sydney',
                'departureTime' => '2024-08-10 02:00:00',
                'arrivalTime' => '2024-08-10 14:00:00',
            ],
        ];

        DB::table('flights')->insert($flights);
    }
}
