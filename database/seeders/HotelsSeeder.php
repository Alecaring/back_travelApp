<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hotels = [
            [
                'Name' => 'Hotel Paradise',
                'City' => 'Rome',
                'Address' => 'Via del Corso 10',
                'Latitude' => 41.9028,
                'Longitude' => 12.4964,
                'CoverImage' => 'images/hotel_paradise.jpg',
            ],
            [
                'Name' => 'Grand Hotel Central',
                'City' => 'New York',
                'Address' => '5th Avenue 1',
                'Latitude' => 40.7128,
                'Longitude' => -74.0060,
                'CoverImage' => 'images/grand_hotel_central.jpg',
            ],
            [
                'Name' => 'Sea View Hotel',
                'City' => 'Sydney',
                'Address' => 'Bondi Beach',
                'Latitude' => -33.8688,
                'Longitude' => 151.2093,
                'CoverImage' => 'images/sea_view_hotel.jpg',
            ],
            [
                'Name' => 'Mountain Retreat',
                'City' => 'Denver',
                'Address' => 'Mountain Road 123',
                'Latitude' => 39.7392,
                'Longitude' => -104.9903,
                'CoverImage' => 'images/mountain_retreat.jpg',
            ],
            [
                'Name' => 'Luxury Inn',
                'City' => 'Paris',
                'Address' => 'Champs-Élysées 15',
                'Latitude' => 48.8566,
                'Longitude' => 2.3522,
                'CoverImage' => 'images/luxury_inn.jpg',
            ],
            [
                'Name' => 'Cozy Cottage',
                'City' => 'San Francisco',
                'Address' => 'Lombard Street 123',
                'Latitude' => 37.7749,
                'Longitude' => -122.4194,
                'CoverImage' => 'images/cozy_cottage.jpg',
            ],
            [
                'Name' => 'Royal Plaza',
                'City' => 'Tokyo',
                'Address' => 'Shinjuku 1-2-3',
                'Latitude' => 35.6895,
                'Longitude' => 139.6917,
                'CoverImage' => 'images/royal_plaza.jpg',
            ],
            [
                'Name' => 'Desert Oasis',
                'City' => 'Dubai',
                'Address' => 'Sheikh Zayed Road',
                'Latitude' => 25.276987,
                'Longitude' => 55.296249,
                'CoverImage' => 'images/desert_oasis.jpg',
            ],
            [
                'Name' => 'Highland Lodge',
                'City' => 'Edinburgh',
                'Address' => 'Royal Mile',
                'Latitude' => 55.9533,
                'Longitude' => -3.1883,
                'CoverImage' => 'images/highland_lodge.jpg',
            ],
            [
                'Name' => 'Seaside Resort',
                'City' => 'Miami',
                'Address' => 'Ocean Drive 200',
                'Latitude' => 25.7617,
                'Longitude' => -80.1918,
                'CoverImage' => 'images/seaside_resort.jpg',
            ],
            [
                'Name' => 'City Lights Hotel',
                'City' => 'Hong Kong',
                'Address' => 'Nathan Road 15',
                'Latitude' => 22.3193,
                'Longitude' => 114.1694,
                'CoverImage' => 'images/city_lights_hotel.jpg',
            ],
        ];

        DB::table('hotels')->insert($hotels);
    }
}
