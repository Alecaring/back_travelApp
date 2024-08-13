<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceImage extends Model
{
    use HasFactory;

    // Nome della tabella associata al modello
    protected $table = 'experience_images';

    // La chiave primaria del modello
    protected $primaryKey = 'id';

    // Le colonne che possono essere assegnate in massa
    protected $fillable = [
        'experience_id',
        'image',
        'description',
    ];

    // Definisce il tipo di chiave primaria
    public $incrementing = true;

    // Definisce il tipo di chiave primaria
    protected $keyType = 'int';

    // Se utilizzi i timestamp, altrimenti impostare a false
    public $timestamps = true;

    /**
     * Get the experience that owns the image.
     */
    public function experience()
    {
        return $this->belongsTo(Experience::class, 'experience_id', 'ExperienceId');
    }
}
