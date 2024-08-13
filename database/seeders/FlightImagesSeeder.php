<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('flight_images')->insert([
            ['flight_id' => 1, 'image' => 'images/flight1_1.jpg', 'description' => 'Cockpit view of Flight 101'],
            ['flight_id' => 1, 'image' => 'images/flight1_2.jpg', 'description' => 'Aerial view from Flight 101'],
            ['flight_id' => 2, 'image' => 'images/flight2_1.jpg', 'description' => 'First-class cabin of Flight 202'],
            ['flight_id' => 2, 'image' => 'images/flight2_2.jpg', 'description' => 'Takeoff view from Flight 202'],
            ['flight_id' => 3, 'image' => 'images/flight3_1.jpg', 'description' => 'Landing view of Flight 303'],
            ['flight_id' => 3, 'image' => 'images/flight3_2.jpg', 'description' => 'In-flight meal on Flight 303'],
            ['flight_id' => 4, 'image' => 'images/flight4_1.jpg', 'description' => 'View from the wing of Flight 404'],
            ['flight_id' => 4, 'image' => 'images/flight4_2.jpg', 'description' => 'Passenger view in Flight 404'],
            ['flight_id' => 5, 'image' => 'images/flight5_1.jpg', 'description' => 'Cabin view of Flight 505'],
            ['flight_id' => 5, 'image' => 'images/flight5_2.jpg', 'description' => 'Landing gear view of Flight 505'],
        ]);
    }
}
