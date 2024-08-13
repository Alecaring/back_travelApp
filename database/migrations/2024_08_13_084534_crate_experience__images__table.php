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
        Schema::create('experience_images', function (Blueprint $table) {
            $table->id(); // ID univoco per l'immagine
            $table->unsignedBigInteger('experience_id'); // Chiave esterna alla tabella experiences
            $table->string('image')->nullable(); // Percorso dell'immagine
            $table->string('description', 255)->nullable(); // Descrizione dell'immagine, opzionale
            $table->timestamps(); // Timestamp di creazione e aggiornamento

            // Chiave esterna
            $table->foreign('experience_id')
                ->references('ExperienceId')
                ->on('experiences')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience_images');
    }
};
