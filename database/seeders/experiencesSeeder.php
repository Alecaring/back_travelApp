<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experiences = [
            [
                'name' => 'Adventure in the Alps',
                'location' => 'Alps, Switzerland',
                'description' => 'A thrilling adventure in the stunning Alps.',
                'price' => 250,
                'duration' => '5 hours',
                'category' => 'Adventure',
                'cover_image' => 'images/experience1.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beach Relaxation',
                'location' => 'Maldives',
                'description' => 'Relax on the pristine beaches of the Maldives.',
                'price' => 300,
                'duration' => '8 hours',
                'category' => 'Relaxation',
                'cover_image' => 'images/experience2.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'City Tour',
                'location' => 'New York, USA',
                'description' => 'Explore the iconic landmarks of New York City.',
                'price' => 150,
                'duration' => '4 hours',
                'category' => 'Tour',
                'cover_image' => 'images/experience3.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cultural Heritage Tour',
                'location' => 'Kyoto, Japan',
                'description' => 'Discover the rich cultural heritage of Kyoto.',
                'price' => 200,
                'duration' => '6 hours',
                'category' => 'Culture',
                'cover_image' => 'images/experience4.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wildlife Safari',
                'location' => 'Serengeti, Tanzania',
                'description' => 'Experience the wildlife safari in the Serengeti.',
                'price' => 350,
                'duration' => '7 hours',
                'category' => 'Wildlife',
                'cover_image' => 'images/experience5.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Scuba Diving',
                'location' => 'Great Barrier Reef, Australia',
                'description' => 'Explore the underwater world of the Great Barrier Reef.',
                'price' => 400,
                'duration' => '5 hours',
                'category' => 'Adventure',
                'cover_image' => 'images/experience6.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Historical Landmarks Tour',
                'location' => 'Rome, Italy',
                'description' => 'Visit the ancient historical landmarks of Rome.',
                'price' => 180,
                'duration' => '5 hours',
                'category' => 'History',
                'cover_image' => 'images/experience7.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wine Tasting',
                'location' => 'Napa Valley, USA',
                'description' => 'Enjoy a day of wine tasting in Napa Valley.',
                'price' => 220,
                'duration' => '4 hours',
                'category' => 'Food & Drink',
                'cover_image' => 'images/experience8.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mountain Climbing',
                'location' => 'Mount Fuji, Japan',
                'description' => 'Climb the majestic Mount Fuji.',
                'price' => 280,
                'duration' => '6 hours',
                'category' => 'Adventure',
                'cover_image' => 'images/experience9.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Luxury Cruise',
                'location' => 'Caribbean Sea',
                'description' => 'Enjoy a luxurious cruise around the Caribbean.',
                'price' => 500,
                'duration' => '3 days',
                'category' => 'Luxury',
                'cover_image' => 'images/experience10.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hot Air Balloon Ride',
                'location' => 'Capadocia, Turkey',
                'description' => 'Experience breathtaking views from a hot air balloon.',
                'price' => 320,
                'duration' => '2 hours',
                'category' => 'Adventure',
                'cover_image' => 'images/experience11.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('experiences')->insert($experiences);
    }
}
