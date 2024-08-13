<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlightImage extends Model
{
    // Definisce la relazione tra FlightImage e Flight
    public function flight()
    {
        return $this->belongsTo(Flight::class, 'flight_id', 'FlightId');
    }
}
