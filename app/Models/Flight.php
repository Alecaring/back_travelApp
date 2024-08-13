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
    
    public function images()
    {
        return $this->hasMany(FlightImage::class, 'flight_id', 'FlightId');
    }

    protected $primaryKey = 'FlightId';
    protected $table = 'flights';

    protected $fillable = [
        'airlineName',
        'sourceCity',
        'destinationCity',
        'LatitudeSource',
        'LongitudeSource',
        'LatitudeDest',
        'LongitudeDest',
        'InTime',
        'CoverImage',
        'departureTime',
        'arrivalTime'
    ];
}
