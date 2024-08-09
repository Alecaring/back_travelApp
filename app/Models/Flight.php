<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    public function bookings() {
        return $this->hasMany(Booking::class, 'FlightID', 'FlightID');
    }

    protected $table = 'flights';

    protected $fillable = [
        'airlineName',
        'sourceCity',
        'destinationCity',
        'departureTime',
        'arrivalTime'
    ];
}
