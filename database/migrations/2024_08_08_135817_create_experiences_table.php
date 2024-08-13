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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id('ExperienceId');
            $table->string('name', 100)->nullable(); // Nome dell'esperienza
            $table->string('location', 255)->nullable(); // Luogo dove si svolge l'esperienza
            $table->text('description')->nullable(); // Descrizione dettagliata dell'esperienza
            $table->decimal('price', 8, 2)->nullable(); // Prezzo dell'esperienza
            $table->unsignedInteger('duration')->nullable(); // Durata dell'esperienza in minuti
            $table->string('category', 50)->nullable(); // Categoria dell'esperienza, come "Avventura", "Culturale", ecc.
            $table->boolean('is_active')->default(true); // Stato dell'esperienza (attiva/inattiva)
            $table->string('cover_image')->nullable(); // Immagine di copertura dell'esperienza
            $table->timestamps(); // Timestamp di creazione e aggiornamento
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
