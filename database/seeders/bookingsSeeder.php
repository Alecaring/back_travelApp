<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
            ['BookingDate' => '2024-08-10', 'UserID' => 1, 'FlightID' => 1, 'HotelID' => 1, 'ExperienceID' => 1],
            ['BookingDate' => '2024-08-11', 'UserID' => 2, 'FlightID' => 2, 'HotelID' => 2, 'ExperienceID' => 2],
            ['BookingDate' => '2024-08-12', 'UserID' => 3, 'FlightID' => 3, 'HotelID' => 3, 'ExperienceID' => 3],
            ['BookingDate' => '2024-08-13', 'UserID' => 4, 'FlightID' => 4, 'HotelID' => 4, 'ExperienceID' => 4],
            ['BookingDate' => '2024-08-14', 'UserID' => 5, 'FlightID' => 5, 'HotelID' => 5, 'ExperienceID' => 5],
            ['BookingDate' => '2024-08-15', 'UserID' => 6, 'FlightID' => 6, 'HotelID' => 6, 'ExperienceID' => 6],
            ['BookingDate' => '2024-08-16', 'UserID' => 7, 'FlightID' => 7, 'HotelID' => 7, 'ExperienceID' => 7],
            ['BookingDate' => '2024-08-17', 'UserID' => 8, 'FlightID' => 8, 'HotelID' => 8, 'ExperienceID' => 8],
            ['BookingDate' => '2024-08-18', 'UserID' => 9, 'FlightID' => 9, 'HotelID' => 9, 'ExperienceID' => 9],
            ['BookingDate' => '2024-08-19', 'UserID' => 10, 'FlightID' => 10, 'HotelID' => 10, 'ExperienceID' => 10],
        ]);
    }
}
