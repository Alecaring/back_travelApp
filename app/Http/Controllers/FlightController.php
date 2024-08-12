<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Flight;
use app\Models\FlightImage;
use Illuminate\Support\Facades\Storage;

class FlightController extends Controller
{
    /**
     * Upload an image for a specified flight.
     */
    public function uploadImage(Request $request, $flightId)
    {
        // Validazione del file
        $request->validate([
            'image' => 'required|file|mimes:jpg,png|max:2048',
        ]);

        // Trova il volo
        $flight = Flight::findOrFail($flightId);

        // Salvataggio del file
        $path = $request->file('image')->store('public/flight_images');

        // Creazione di un nuovo record nella tabella `flight_images`
        $flightImage = new FlightImage();
        $flightImage->FlightId = $flight->FlightId;
        $flightImage->imagePath = $path;
        $flightImage->save();

        // Restituzione dell'URL del file caricato
        return response()->json(['path' => Storage::url($path)]);
    }
}
