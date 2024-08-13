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
        // Svuota la tabella prima di inserire i dati
        DB::table('flights')->delete(); // Truncate per preservare le chiavi primarie auto-incrementali

        // Inserisci i dati nella tabella
        DB::table('flights')->insert([
            [
                'airlineName' => 'Ryanair', 
                'sourceCity' => 'New York', 
                'destinationCity' => 'Los Angeles', 
                'LatitudeSource' => 40.712776, 
                'LongitudeSource' => -74.005974,
                'LatitudeDest' => 34.052235, 
                'LongitudeDest' => -118.243683,
                'InTime' => true,
                'departureTime' => '2024-08-01 10:00:00', 
                'arrivalTime' => '2024-08-01 13:00:00',
                'CoverImage' => 'images/flight1_cover.jpg'
            ],
            [
                'airlineName' => 'American Airlines', 
                'sourceCity' => 'Chicago', 
                'destinationCity' => 'Miami', 
                'LatitudeSource' => 41.878113, 
                'LongitudeSource' => -87.629799,
                'LatitudeDest' => 25.761681, 
                'LongitudeDest' => -80.191788,
                'InTime' => true,
                'departureTime' => '2024-08-02 11:00:00', 
                'arrivalTime' => '2024-08-02 14:00:00',
                'CoverImage' => 'images/flight2_cover.jpg'
            ],
            [
                'airlineName' => 'Singapore Airlines', 
                'sourceCity' => 'San Francisco', 
                'destinationCity' => 'Seattle', 
                'LatitudeSource' => 37.774929, 
                'LongitudeSource' => -122.419418,
                'LatitudeDest' => 47.606209, 
                'LongitudeDest' => -122.332069,
                'InTime' => true,
                'departureTime' => '2024-08-03 09:00:00', 
                'arrivalTime' => '2024-08-03 12:00:00',
                'CoverImage' => 'images/flight3_cover.jpg'
            ],
            [
                'airlineName' => 'Lufthansa', 
                'sourceCity' => 'Boston', 
                'destinationCity' => 'Washington', 
                'LatitudeSource' => 42.360081, 
                'LongitudeSource' => -71.058884,
                'LatitudeDest' => 38.907192, 
                'LongitudeDest' => -77.036873,
                'InTime' => false,
                'departureTime' => '2024-08-04 08:00:00', 
                'arrivalTime' => '2024-08-04 10:30:00',
                'CoverImage' => 'images/flight4_cover.jpg'
            ],
            [
                'airlineName' => 'Delta Airlines', 
                'sourceCity' => 'Atlanta', 
                'destinationCity' => 'Orlando', 
                'LatitudeSource' => 33.749001, 
                'LongitudeSource' => -84.387978,
                'LatitudeDest' => 28.538336, 
                'LongitudeDest' => -81.379234,
                'InTime' => true,
                'departureTime' => '2024-08-05 14:00:00', 
                'arrivalTime' => '2024-08-05 15:30:00',
                'CoverImage' => 'images/flight5_cover.jpg'
            ],
            [
                'airlineName' => 'JetBlue', 
                'sourceCity' => 'Fort Lauderdale', 
                'destinationCity' => 'New York', 
                'LatitudeSource' => 26.122439, 
                'LongitudeSource' => -80.137317,
                'LatitudeDest' => 40.712776, 
                'LongitudeDest' => -74.005974,
                'InTime' => true,
                'departureTime' => '2024-08-06 16:00:00', 
                'arrivalTime' => '2024-08-06 18:00:00',
                'CoverImage' => 'images/flight6_cover.jpg'
            ],
            [
                'airlineName' => 'Alaska Airlines', 
                'sourceCity' => 'Seattle', 
                'destinationCity' => 'San Diego', 
                'LatitudeSource' => 47.606209, 
                'LongitudeSource' => -122.332069,
                'LatitudeDest' => 32.715736, 
                'LongitudeDest' => -117.161087,
                'InTime' => true,
                'departureTime' => '2024-08-07 12:00:00', 
                'arrivalTime' => '2024-08-07 14:00:00',
                'CoverImage' => 'images/flight7_cover.jpg'
            ],
            [
                'airlineName' => 'Southwest Airlines', 
                'sourceCity' => 'Dallas', 
                'destinationCity' => 'Houston', 
                'LatitudeSource' => 32.776665, 
                'LongitudeSource' => -96.796989,
                'LatitudeDest' => 29.760427, 
                'LongitudeDest' => -95.369804,
                'InTime' => true,
                'departureTime' => '2024-08-08 10:00:00', 
                'arrivalTime' => '2024-08-08 11:00:00',
                'CoverImage' => 'images/flight8_cover.jpg'
            ],
            [
                'airlineName' => 'British Airways', 
                'sourceCity' => 'London', 
                'destinationCity' => 'New York', 
                'LatitudeSource' => 51.507351, 
                'LongitudeSource' => -0.127758,
                'LatitudeDest' => 40.712776, 
                'LongitudeDest' => -74.005974,
                'InTime' => false,
                'departureTime' => '2024-08-09 17:00:00', 
                'arrivalTime' => '2024-08-09 20:00:00',
                'CoverImage' => 'images/flight9_cover.jpg'
            ],
            [
                'airlineName' => 'Emirates', 
                'sourceCity' => 'Dubai', 
                'destinationCity' => 'New York', 
                'LatitudeSource' => 25.276987, 
                'LongitudeSource' => 55.296249,
                'LatitudeDest' => 40.712776, 
                'LongitudeDest' => -74.005974,
                'InTime' => true,
                'departureTime' => '2024-08-10 22:00:00', 
                'arrivalTime' => '2024-08-11 05:00:00',
                'CoverImage' => 'images/flight10_cover.jpg'
            ],
            [
                'airlineName' => 'Qatar Airways', 
                'sourceCity' => 'Doha', 
                'destinationCity' => 'Los Angeles', 
                'LatitudeSource' => 25.276987, 
                'LongitudeSource' => 51.521000,
                'LatitudeDest' => 34.052235, 
                'LongitudeDest' => -118.243683,
                'InTime' => true,
                'departureTime' => '2024-08-11 18:00:00', 
                'arrivalTime' => '2024-08-12 12:00:00',
                'CoverImage' => 'images/flight11_cover.jpg'
            ],
        ]);
    }
}
