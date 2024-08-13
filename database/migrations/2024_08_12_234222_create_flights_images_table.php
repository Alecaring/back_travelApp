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
        Schema::create('flight_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flight_id');
            $table->string('image')->nullable();
            $table->string('description', 255)->nullable(); // Descrizione dell'immagine, opzionale
            $table->timestamps(); // Timestamp di creazione e aggiornamento

            // Chiave esterna
            $table->foreign('flight_id')->references('FlightId')->on('flights')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_images');
    }
};

