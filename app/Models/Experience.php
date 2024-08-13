<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    // Definisce la tabella associata al modello
    protected $table = 'experiences';

    protected $primaryKey = 'ExperienceId'; // Nome della colonna primaria
    public $incrementing = true; // Imposta su false se non è auto-incrementante


    // Permette l'assegnazione di massa ai seguenti attributi
    protected $fillable = [
        'name',
        'location',
        'description',
        'price',
        'duration',
        'category',
        'cover_image',
        'is_active'
    ];

    /**
     * Ottiene le prenotazioni associate all'esperienza.
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'ExperienceID', 'ExperienceId');
    }

    /**
     * Ottiene le immagini associate all'esperienza.
     */
    public function images()
    {
        return $this->hasMany(ExperienceImage::class, 'experience_id', 'ExperienceId');
    }
}
