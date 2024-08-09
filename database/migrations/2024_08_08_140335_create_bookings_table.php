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
            $table->id('BookingID');
            $table->unsignedBigInteger('UserID')->nullable();
            $table->unsignedBigInteger('FlightID')->nullable();
            $table->unsignedBigInteger('HotelID')->nullable();
            $table->unsignedBigInteger('ExperienceID')->nullable();
            $table->dateTimeTz('BookingDate')->nullable();
            $table->timestamps();

            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('cascade');
            $table->foreign('FlightID')->references('FlightID')->on('flights')->onDelete('cascade');
            $table->foreign('HotelID')->references('HotelID')->on('hotels')->onDelete('cascade');
            $table->foreign('ExperienceID')->references('ExperienceID')->on('experiences')->onDelete('cascade');
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
