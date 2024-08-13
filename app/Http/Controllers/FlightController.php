<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\FlightImage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::all();
        return view('flights.index', compact('flights'));
    }

    public function create()
    {
        return view('flights.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'airlineName' => 'required|string|max:100',
            'sourceCity' => 'required|string|max:50',
            'destinationCity' => 'required|string|max:50',
            'LatitudeSource' => 'nullable|numeric',
            'LongitudeSource' => 'nullable|numeric',
            'LatitudeDest' => 'nullable|numeric',
            'LongitudeDest' => 'nullable|numeric',
            'InTime' => 'nullable|boolean',
            'departureTime' => 'required|date',
            'arrivalTime' => 'required|date',
            'CoverImage' => 'nullable|image|max:2048',
            'images.*' => 'nullable|image|max:2048',
            'descriptions.*' => 'nullable|string|max:255',
        ]);

        // Salvare l'immagine di copertura se presente
        if ($request->hasFile('CoverImage')) {
            $validated['CoverImage'] = $request->file('CoverImage')->store('cover_images', 'public');
        }

        // Creare il volo
        $flight = Flight::create($validated);

        // Salvare le immagini aggiuntive se presenti
        if ($request->has('images')) {
            foreach ($request->file('images') as $key => $image) {
                $imagePath = $image->store('flight_images', 'public');
                FlightImage::create([
                    'flight_id' => $flight->FlightId,
                    'image' => $imagePath,
                    'description' => $request->descriptions[$key] ?? null,
                ]);
            }
        }

        return redirect()->route('flights.index')->with('success', 'Flight created successfully.');
    }

    public function show(Flight $flight)
    {
        return view('flights.show', compact('flight'));
    }

    public function edit($id)
{
    $flight = Flight::findOrFail($id);

    // Converti le date in oggetti Carbon
    $flight->departureTime = Carbon::parse($flight->departureTime);
    $flight->arrivalTime = Carbon::parse($flight->arrivalTime);

    return view('flights.edit', compact('flight'));
}

    public function update(Request $request, Flight $flight)
    {
        $validated = $request->validate([
            'airlineName' => 'required|string|max:100',
            'sourceCity' => 'required|string|max:50',
            'destinationCity' => 'required|string|max:50',
            'LatitudeSource' => 'nullable|numeric',
            'LongitudeSource' => 'nullable|numeric',
            'LatitudeDest' => 'nullable|numeric',
            'LongitudeDest' => 'nullable|numeric',
            'InTime' => 'nullable|boolean',
            'departureTime' => 'required|date',
            'arrivalTime' => 'required|date',
            'CoverImage' => 'nullable|image|max:2048',
            'images.*' => 'nullable|image|max:2048',
            'descriptions.*' => 'nullable|string|max:255',
        ]);

        // Salvare l'immagine di copertura se presente
        if ($request->hasFile('CoverImage')) {
            // Eliminare l'immagine precedente se esiste
            if ($flight->CoverImage) {
                Storage::disk('public')->delete($flight->CoverImage);
            }
            $validated['CoverImage'] = $request->file('CoverImage')->store('cover_images', 'public');
        }

        // Aggiornare il volo
        $flight->update($validated);

        // Salvare le immagini aggiuntive se presenti
        if ($request->has('images')) {
            foreach ($request->file('images') as $key => $image) {
                $imagePath = $image->store('flight_images', 'public');
                FlightImage::create([
                    'flight_id' => $flight->FlightId,
                    'image' => $imagePath,
                    'description' => $request->descriptions[$key] ?? null,
                ]);
            }
        }

        return redirect()->route('flights.index')->with('success', 'Flight updated successfully.');
    }

    public function destroy(Flight $flight)
    {
        // Eliminare l'immagine di copertura se esiste
        if ($flight->CoverImage) {
            Storage::disk('public')->delete($flight->CoverImage);
        }

        // Eliminare le immagini aggiuntive
        FlightImage::where('flight_id', $flight->FlightId)->delete();

        // Eliminare il volo
        $flight->delete();

        return redirect()->route('flights.index')->with('success', 'Flight deleted successfully.');
    }
}
