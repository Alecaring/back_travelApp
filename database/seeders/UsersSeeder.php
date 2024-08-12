<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->deleteelImages(); // Usa truncate() per resettare anche l'auto-incremento

        DB::table('users')->insert([
            ['email' => 'john@example.com', 'name' => 'John Doe', 'password' => bcrypt('password')],
            ['email' => 'jane@example.com', 'name' => 'Jane Smith', 'password' => bcrypt('password')],
            ['email' => 'alice@example.com', 'name' => 'Alice Johnson', 'password' => bcrypt('password')],
            ['email' => 'bob@example.com', 'name' => 'Bob Brown', 'password' => bcrypt('password')],
            ['email' => 'charlie@example.com', 'name' => 'Charlie Davis', 'password' => bcrypt('password')],
            ['email' => 'david@example.com', 'name' => 'David Lee', 'password' => bcrypt('password')],
            ['email' => 'eve@example.com', 'name' => 'Eve Adams', 'password' => bcrypt('password')],
            ['email' => 'frank@example.com', 'name' => 'Frank Thomas', 'password' => bcrypt('password')],
            ['email' => 'grace@example.com', 'name' => 'Grace Wilson', 'password' => bcrypt('password')],
            ['email' => 'hank@example.com', 'name' => 'Hank Martin', 'password' => bcrypt('password')],
        ]);
    }
}
