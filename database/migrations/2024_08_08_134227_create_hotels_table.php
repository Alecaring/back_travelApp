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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id('HotelID');
            $table->string('Name', 100)->nullable(); 
            $table->string('City', 50)->nullable();
            $table->string('Address', 255)->nullable();
            $table->decimal('Latitude', 9, 6)->nullable();
            $table->decimal('Longitude', 9, 6)->nullable();
            $table->string('CoverImage')->nullable();
            $table->unsignedBigInteger('imagesHotelId')->nullable();
            $table->timestamps();

            // $table->foreign('imagesHotelId')->references('imagesHotelId')->on('HotelsImages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
