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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('PaymentID');
            $table->unsignedBigInteger('BookingID'); // Cambiato da $table->id a $table->unsignedBigInteger
            $table->decimal('Amount', 10, 2); // Cambiato per usare il parametro giusto
            $table->dateTime('PaymentDate');
            $table->timestamps();

            // Chiave esterna per BookingID
            $table->foreign('BookingID')->references('BookingID')->on('bookings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
