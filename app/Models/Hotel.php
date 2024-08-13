<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hotels';

    protected $primaryKey = 'HotelID'; // Assicurati che questo sia il nome corretto
    public $incrementing = false; // Se la chiave primaria non è auto-incrementale
    protected $keyType = 'string'; // Cambia se il tipo di chiave primaria è diverso


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
