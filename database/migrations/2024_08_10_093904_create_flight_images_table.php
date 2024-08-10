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
            $table->id('ImageId');
            $table->unsignedBigInteger('FlightId');
            $table->string('imagePath', 255); // Path dell'immagine
            $table->string('imageDescription', 255)->nullable(); // Descrizione dell'immagine
            $table->timestamps();

            // Foreign Key Constraint
            $table->foreign('FlightId')
                  ->references('FlightId')
                  ->on('flights')
                  ->onDelete('cascade'); // Cancella immagini se il volo viene eliminato
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
