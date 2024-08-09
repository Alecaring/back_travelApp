<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete(); // Usa delete() invece di truncate()

        DB::table('users')->insert([
            ['UserID' => 1, 'email' => 'john@example.com', 'name' => 'John Doe', 'password' => bcrypt('password')],
            ['UserID' => 2, 'email' => 'jane@example.com', 'name' => 'Jane Smith', 'password' => bcrypt('password')],
            ['UserID' => 3, 'email' => 'alice@example.com', 'name' => 'Alice Johnson', 'password' => bcrypt('password')],
            ['UserID' => 4, 'email' => 'bob@example.com', 'name' => 'Bob Brown', 'password' => bcrypt('password')],
        ]);
    }
}

