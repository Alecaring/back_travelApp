<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelImage extends Model
{
    use HasFactory;

    protected $table = 'HotelsImages';

    protected $fillable = [
        'imagesHotelId',
        'image',
        'description'
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'imagesHotelId', 'HotelID');
    }
}
