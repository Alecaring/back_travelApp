<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightImage extends Model
{
    use HasFactory;

    protected $table = 'flight_images';

    protected $fillable = [
        'FlightId',
        'imagePath',
        'imageDescription',
    ];

    public function flight() {
        return $this->belongsTo(Flight::class, 'FlightId', 'FlightId');
    }
}
