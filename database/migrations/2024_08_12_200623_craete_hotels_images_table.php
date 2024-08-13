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
        Schema::create('hotel_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hotel_id'); // Chiave esterna rinominata
            $table->string('image')->nullable();    // Immagine opzionale
            $table->string('description', 255)->nullable(); // Descrizione opzionale
            $table->timestamps();

            // Imposta la chiave esterna
            $table->foreign('hotel_id')->references('HotelID')->on('hotels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_images');
    }
};
