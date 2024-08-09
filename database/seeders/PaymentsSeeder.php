<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            ['Amount' => 299.99, 'BookingID' => 1, 'PaymentDate' => '2024-08-09 10:42:22'],
            ['Amount' => 150.00, 'BookingID' => 2, 'PaymentDate' => '2024-08-08 10:42:22'],
            ['Amount' => 450.75, 'BookingID' => 3, 'PaymentDate' => '2024-08-07 10:42:22'],
            ['Amount' => 199.50, 'BookingID' => 4, 'PaymentDate' => '2024-08-06 10:42:22'],
        ]);
    }
}
