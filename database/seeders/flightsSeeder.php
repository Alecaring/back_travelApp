<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightsSeeder extends Seeder
{
    public function run()
    {
        DB::table('flights')->delete(); // Svuota la tabella prima di inserire i dati

        DB::table('flights')->insert([
            ['airlineName' => 'Airline 1', 'sourceCity' => 'New York', 'destinationCity' => 'Los Angeles', 'departureTime' => '2024-08-01 10:00:00', 'arrivalTime' => '2024-08-01 13:00:00'],
            ['airlineName' => 'Airline 2', 'sourceCity' => 'Chicago', 'destinationCity' => 'Miami', 'departureTime' => '2024-08-02 11:00:00', 'arrivalTime' => '2024-08-02 14:00:00'],
            ['airlineName' => 'Airline 3', 'sourceCity' => 'San Francisco', 'destinationCity' => 'Seattle', 'departureTime' => '2024-08-03 09:00:00', 'arrivalTime' => '2024-08-03 12:00:00'],
            ['airlineName' => 'Airline 4', 'sourceCity' => 'Boston', 'destinationCity' => 'Washington', 'departureTime' => '2024-08-04 08:00:00', 'arrivalTime' => '2024-08-04 10:30:00'],
        ]);
    }
}

