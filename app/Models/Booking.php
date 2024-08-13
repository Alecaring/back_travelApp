<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Specifica la tabella utilizzata da questo modello
    protected $table = 'bookings';

    // Definisci la chiave primaria se è diversa da 'id'
    protected $primaryKey = 'BookingID';

    // Abilita l'auto-incremento della chiave primaria
    public $incrementing = true;

    // Specifica il tipo di chiave primaria se non è un intero
    protected $keyType = 'bigint';

    // Abilita la gestione dei timestamp se la tabella ha le colonne 'created_at' e 'updated_at'
    public $timestamps = true;

    /**
     * Definisce una relazione "belongs to" con il modello User
     */
    public function user() {
        return $this->belongsTo(User::class, 'UserID', 'UserId');
    }
    
    /**
     * Definisce una relazione "has many" con il modello Payment
     */
    public function payments() {
        return $this->hasMany(Payment::class, 'BookingID', 'BookingID');
    }

    /**
     * Definisce una relazione "belongs to" con il modello Experience
     */
    public function experience() {
        return $this->belongsTo(Experience::class, 'ExperienceID', 'ExperienceId');
    }

    /**
     * Definisce una relazione "belongs to" con il modello Flight
     */
    public function flight() {
        return $this->belongsTo(Flight::class, 'FlightID', 'FlightId');
    }

    /**
     * Definisce una relazione "belongs to" con il modello Hotel
     */
    public function hotel() {
        return $this->belongsTo(Hotel::class, 'HotelID', 'HotelId');
    }

    /**
     * Definisce gli attributi che possono essere massivamente assegnati
     */
    protected $fillable = [
        'BookingDate',
        'UserID',
        'FlightID',
        'HotelID',
        'ExperienceID',
        'status',          // Stato della prenotazione
        'total_amount',    // Importo totale della prenotazione
        'payment_method',  // Metodo di pagamento
        'payment_status',  // Stato del pagamento
        'check_in_date',   // Data di check-in
        'check_out_date',  // Data di check-out
        'number_of_guests' // Numero di ospiti
    ];
}
