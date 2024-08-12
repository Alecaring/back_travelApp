<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('HotelsImages')->insert([
            ['imagesHotelId' => 1, 'image' => 'images/hotel1_1.jpg', 'description' => 'Lobby of Hotel Paradise'],
            ['imagesHotelId' => 1, 'image' => 'images/hotel1_2.jpg', 'description' => 'Exterior view of Hotel Paradise'],
            ['imagesHotelId' => 2, 'image' => 'images/hotel2_1.jpg', 'description' => 'Grand Hall of Grand Hotel Central'],
            ['imagesHotelId' => 2, 'image' => 'images/hotel2_2.jpg', 'description' => 'Room view at Grand Hotel Central'],
            ['imagesHotelId' => 3, 'image' => 'images/hotel3_1.jpg', 'description' => 'Beach view from Sea View Hotel'],
            ['imagesHotelId' => 3, 'image' => 'images/hotel3_2.jpg', 'description' => 'Pool area at Sea View Hotel'],
            ['imagesHotelId' => 4, 'image' => 'images/hotel4_1.jpg', 'description' => 'Mountain view from Mountain Retreat'],
            ['imagesHotelId' => 4, 'image' => 'images/hotel4_2.jpg', 'description' => 'Lounge area at Mountain Retreat'],
            // Aggiungi altri record se necessario
        ]);
    }
}
