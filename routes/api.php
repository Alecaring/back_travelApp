<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ExperienceController;
use App\Http\Controllers\API\FlightController;
use App\Http\Controllers\API\HotelController;
use App\Http\Controllers\API\PaymentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('experiences', ExperienceController::class);

Route::apiResource('flights', FlightController::class);

Route::apiResource('hotels', HotelController::class);

Route::apiResource('payments', PaymentController::class);

