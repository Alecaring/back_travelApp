<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('BookingID');
            $table->date('BookingDate');
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('FlightID')->nullable();
            $table->unsignedBigInteger('HotelID')->nullable();
            $table->unsignedBigInteger('ExperienceID')->nullable();

            $table->string('status')->default('pending'); // Stato della prenotazione
            $table->decimal('total_amount', 10, 2)->nullable(); // Importo totale della prenotazione
            $table->string('payment_method')->nullable(); // Metodo di pagamento
            $table->string('payment_status')->default('unpaid'); // Stato del pagamento

            // Aggiungi colonne specifiche per hotel
            $table->date('check_in_date')->nullable(); // Data di check-in
            $table->date('check_out_date')->nullable(); // Data di check-out
            $table->integer('number_of_guests')->nullable(); // Numero di ospiti

            // Definisci le chiavi esterne
            $table->foreign('UserID')->references('UserId')->on('users')->onDelete('cascade');
            $table->foreign('FlightID')->references('FlightId')->on('flights')->onDelete('set null');
            $table->foreign('HotelID')->references('HotelId')->on('hotels')->onDelete('set null');
            $table->foreign('ExperienceID')->references('ExperienceId')->on('experiences')->onDelete('set null');

            // Aggiungi indici per le colonne utilizzate nelle query
            $table->index('BookingDate');
            $table->index('UserID');
            $table->index('FlightID');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
