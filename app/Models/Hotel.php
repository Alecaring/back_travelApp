<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    public function bookings() {
        return $this->hasMany(Booking::class, 'HotelID', 'HotelID');
    }

    protected $table = 'hotels';

    protected $fillable = [
        'Name',
        'City',
        'Address',
        'Latitude',
        'Longitude',
    ];
}
