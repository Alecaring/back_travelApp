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
        // migration for bookings table
Schema::create('bookings', function (Blueprint $table) {
    $table->bigIncrements('BookingID');
    $table->date('BookingDate');
    $table->unsignedBigInteger('UserID');
    $table->unsignedBigInteger('FlightID');
    $table->unsignedBigInteger('HotelID');
    $table->unsignedBigInteger('ExperienceID');
    
    $table->foreign('UserID')->references('UserId')->on('users')->onDelete('cascade');
    $table->foreign('FlightID')->references('FlightId')->on('flights')->onDelete('cascade');
    $table->foreign('HotelID')->references('HotelId')->on('hotels')->onDelete('cascade');
    $table->foreign('ExperienceID')->references('ExperienceId')->on('experiences')->onDelete('cascade');
    
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
