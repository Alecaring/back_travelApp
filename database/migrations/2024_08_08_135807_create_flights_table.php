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
        Schema::create('flights', function (Blueprint $table) {
            $table->id('FlightId');
            $table->string('airlineName', 100)->nullable();
            $table->string('sourceCity', 50)->nullable();
            $table->string('destinationCity', 50);
            $table->decimal('LatitudeSource', 9, 6)->nullable();
            $table->decimal('LongitudeSource', 9, 6)->nullable();
            $table->decimal('LatitudeDest', 9, 6)->nullable();
            $table->decimal('LongitudeDest', 9, 6)->nullable();
            $table->boolean('InTime')->default(true)->nullable();
            $table->dateTimeTz('departureTime')->nullable();
            $table->dateTimeTz('arrivalTime')->nullable();
            $table->string('CoverImage')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
