<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hotels';

    protected $fillable = [
        'Name',
        'City',
        'Address',
        'Latitude',
        'Longitude',
        'CoverImage'
    ];

    public function images()
    {
        return $this->hasMany(HotelImage::class, 'imagesHotelId', 'HotelID');
    }
}
