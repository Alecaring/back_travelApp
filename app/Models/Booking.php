<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'UserId', 'UserId');
    }
    
    public function payment() {
        return $this->hasMany(Payment::class, 'BookingID', 'BookingID');
    }

    public function experience() {
        return $this->belongsTo(Experience::class, 'ExperienceId', 'ExperienceId');
    }

    public function flight() {
        return $this->belongsTo(Flight::class, 'FlightID', 'FlightID');
    }

    public function hotel() {
        return $this->belongsTo(Hotel::class, 'HotelID', 'HotelID');
    }
 
}
