<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call([
            
            UsersSeeder::class,
            FlightsSeeder::class,
            hotelsSeeder::class,
            ExperiencesSeeder::class,
            bookingsSeeder::class,
            PaymentsSeeder::class,

        ]);

        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
