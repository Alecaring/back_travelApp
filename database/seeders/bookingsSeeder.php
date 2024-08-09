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
        ]);
    }
}
