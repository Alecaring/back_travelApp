<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    public function bookings() {
        return $this->hasMany(Booking::class, 'ExperienceId', 'ExperienceId');
    }

    protected $table = 'experiences';

    protected $fillable = [
        'name',
        'location'
    ];
}
