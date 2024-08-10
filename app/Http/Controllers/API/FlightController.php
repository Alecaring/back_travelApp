<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Flight;
use App\Models\FlightImage; // Assicurati di includere il modello FlightImage
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Flight::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'airlineName' => 'required|string|max:100',
            'sourceCity' => 'required|string|max:50',
            'destinationCity' => 'required|string|50',
            'departureTime' => 'required|dateTimeTz',
            'arrivalTime' => 'required|dateTimeTz',
        ]);

        $flight = Flight::create($validatedData);

        return response()->json($flight, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $flight = Flight::findOrFail($id);

        return response()->json($flight);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $flight = Flight::findOrFail($id);

        $validatedData = $request->validate([
            'airlineName' => 'required|string|max:100',
            'sourceCity' => 'required|string|max:50',
            'destinationCity' => 'required|string|50',
            'departureTime' => 'required|dateTimeTz',
            'arrivalTime' => 'required|dateTimeTz',
        ]);

        $flight->update($validatedData);

        return response()->json($flight, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flight = Flight::findOrFail($id);

        $flight->delete();

        return response()->json(null, 204);
    }

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
