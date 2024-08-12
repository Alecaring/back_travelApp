<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Svuota la tabella prima di inserire i dati
        DB::table('flights')->delete(); // Utilizza truncate invece di delete per preservare le chiavi primarie auto-incrementali

        // Inserisci i dati nella tabella
        DB::table('flights')->insert([
            [
                'airlineName' => 'Ryanair', 
                'sourceCity' => 'New York', 
                'destinationCity' => 'Los Angeles', 
                'departureTime' => '2024-08-01 10:00:00', 
                'arrivalTime' => '2024-08-01 13:00:00'
            ],
            [
                'airlineName' => 'American Airlines', 
                'sourceCity' => 'Chicago', 
                'destinationCity' => 'Miami', 
                'departureTime' => '2024-08-02 11:00:00', 
                'arrivalTime' => '2024-08-02 14:00:00'
            ],
            [
                'airlineName' => 'Singapore Airlines', 
                'sourceCity' => 'San Francisco', 
                'destinationCity' => 'Seattle', 
                'departureTime' => '2024-08-03 09:00:00', 
                'arrivalTime' => '2024-08-03 12:00:00'
            ],
            [
                'airlineName' => 'Lufthansa', 
                'sourceCity' => 'Boston', 
                'destinationCity' => 'Washington', 
                'departureTime' => '2024-08-04 08:00:00', 
                'arrivalTime' => '2024-08-04 10:30:00'
            ],
            [
                'airlineName' => 'Delta Airlines', 
                'sourceCity' => 'Atlanta', 
                'destinationCity' => 'Orlando', 
                'departureTime' => '2024-08-05 14:00:00', 
                'arrivalTime' => '2024-08-05 15:30:00'
            ],
            [
                'airlineName' => 'JetBlue', 
                'sourceCity' => 'Fort Lauderdale', 
                'destinationCity' => 'New York', 
                'departureTime' => '2024-08-06 16:00:00', 
                'arrivalTime' => '2024-08-06 18:00:00'
            ],
            [
                'airlineName' => 'Alaska Airlines', 
                'sourceCity' => 'Seattle', 
                'destinationCity' => 'San Diego', 
                'departureTime' => '2024-08-07 12:00:00', 
                'arrivalTime' => '2024-08-07 14:00:00'
            ],
            [
                'airlineName' => 'Southwest Airlines', 
                'sourceCity' => 'Dallas', 
                'destinationCity' => 'Houston', 
                'departureTime' => '2024-08-08 10:00:00', 
                'arrivalTime' => '2024-08-08 11:00:00'
            ],
            [
                'airlineName' => 'British Airways', 
                'sourceCity' => 'London', 
                'destinationCity' => 'New York', 
                'departureTime' => '2024-08-09 17:00:00', 
                'arrivalTime' => '2024-08-09 20:00:00'
            ],
            [
                'airlineName' => 'Emirates', 
                'sourceCity' => 'Dubai', 
                'destinationCity' => 'New York', 
                'departureTime' => '2024-08-10 22:00:00', 
                'arrivalTime' => '2024-08-11 05:00:00'
            ],
            [
                'airlineName' => 'Qatar Airways', 
                'sourceCity' => 'Doha', 
                'destinationCity' => 'Los Angeles', 
                'departureTime' => '2024-08-11 18:00:00', 
                'arrivalTime' => '2024-08-12 12:00:00'
            ],
        ]);
    }
}
