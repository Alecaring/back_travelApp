<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsSeeder extends Seeder
{
   
    public function run(): void
    {
        $payments = [
            [
                'BookingID' => 1,
                'Amount' => 299.99,
                'PaymentDate' => now(),
            ],
            [
                'BookingID' => 2,
                'Amount' => 150.00,
                'PaymentDate' => now()->subDays(1),
            ],
            [
                'BookingID' => 3,
                'Amount' => 450.75,
                'PaymentDate' => now()->subDays(2),
            ],
            [
                'BookingID' => 4,
                'Amount' => 199.50,
                'PaymentDate' => now()->subDays(3),
            ],
        ];

        DB::table('payments')->insert($payments);
    }
}
