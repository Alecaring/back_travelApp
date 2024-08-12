<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// routes/web.php
use App\Http\Controllers\HotelController;

Route::get('hotels/create', [HotelController::class, 'create'])->name('hotels.create');
Route::post('hotels', [HotelController::class, 'store'])->name('hotels.store');
Route::resource('hotels', HotelController::class);





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::post('/flights/{flightId}/upload-image', [FlightController::class, 'uploadImage'])->name('flights.upload-image');

require __DIR__.'/auth.php';
