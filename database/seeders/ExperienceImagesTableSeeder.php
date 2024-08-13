<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experienceImages = [
            [
                'experience_id' => 1,
                'image' => 'images/experience1_img1.jpg',
                'description' => 'Alps adventure view 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 1,
                'image' => 'images/experience1_img2.jpg',
                'description' => 'Alps adventure view 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 2,
                'image' => 'images/experience2_img1.jpg',
                'description' => 'Maldives beach 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 2,
                'image' => 'images/experience2_img2.jpg',
                'description' => 'Maldives beach 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 3,
                'image' => 'images/experience3_img1.jpg',
                'description' => 'New York cityscape 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 3,
                'image' => 'images/experience3_img2.jpg',
                'description' => 'New York cityscape 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 4,
                'image' => 'images/experience4_img1.jpg',
                'description' => 'Kyoto heritage site 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 4,
                'image' => 'images/experience4_img2.jpg',
                'description' => 'Kyoto heritage site 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 5,
                'image' => 'images/experience5_img1.jpg',
                'description' => 'Serengeti safari 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 5,
                'image' => 'images/experience5_img2.jpg',
                'description' => 'Serengeti safari 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 6,
                'image' => 'images/experience6_img1.jpg',
                'description' => 'Great Barrier Reef 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 6,
                'image' => 'images/experience6_img2.jpg',
                'description' => 'Great Barrier Reef 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 7,
                'image' => 'images/experience7_img1.jpg',
                'description' => 'Rome landmarks 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 7,
                'image' => 'images/experience7_img2.jpg',
                'description' => 'Rome landmarks 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 8,
                'image' => 'images/experience8_img1.jpg',
                'description' => 'Napa Valley wine 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 8,
                'image' => 'images/experience8_img2.jpg',
                'description' => 'Napa Valley wine 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 9,
                'image' => 'images/experience9_img1.jpg',
                'description' => 'Mount Fuji climb 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 9,
                'image' => 'images/experience9_img2.jpg',
                'description' => 'Mount Fuji climb 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 10,
                'image' => 'images/experience10_img1.jpg',
                'description' => 'Caribbean cruise 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 10,
                'image' => 'images/experience10_img2.jpg',
                'description' => 'Caribbean cruise 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 11,
                'image' => 'images/experience11_img1.jpg',
                'description' => 'Hot air balloon view 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'experience_id' => 11,
                'image' => 'images/experience11_img2.jpg',
                'description' => 'Hot air balloon view 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('experience_images')->insert($experienceImages);
    }
}
