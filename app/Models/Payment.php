<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function bookings() {
        return $this->belongsTo(Booking::class, 'BookingID', 'BookingID');
    }

    protected $table = 'payments';

    protected $fillable = [
        'BookingID',
        'Amount',
        'PaymentDate',
    ];
}
