<?php



// app/Http/Controllers/HotelController.php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHotelRequest;
use App\Http\Requests\UpdateHotelRequest;
use App\Models\Hotel;
use App\Models\HotelImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
    }

    public function create()
    {
        return view('hotels.create');
    }

    public function store(StoreHotelRequest $request)
    {
        $validated = $request->validated();

        // Salvare l'immagine di copertura se presente
        if ($request->hasFile('CoverImage')) {
            $validated['CoverImage'] = $request->file('CoverImage')->store('cover_images', 'public');
        }

        // Creare l'hotel
        $hotel = Hotel::create($validated);

        // Salvare le immagini aggiuntive se presenti
        if ($request->has('images')) {
            foreach ($request->file('images') as $key => $image) {
                $imagePath = $image->store('hotel_images', 'public');
                HotelImage::create([
                    'hotel_id' => $hotel->HotelID,
                    'image' => $imagePath,
                    'description' => $request->descriptions[$key] ?? null,
                ]);
            }
        }

        return redirect()->route('hotels.index')->with('success', 'Hotel created successfully.');
    }

    public function show(Hotel $hotel)
    {
        return view('hotels.show', compact('hotel'));
    }

    public function edit(Hotel $hotel)
    {
        return view('hotels.edit', compact('hotel'));
    }

    public function update(UpdateHotelRequest $request, Hotel $hotel)
    {
        $validated = $request->validated();

        // Salvare l'immagine di copertura se presente
        if ($request->hasFile('CoverImage')) {
            // Eliminare l'immagine precedente se esiste
            if ($hotel->CoverImage) {
                Storage::disk('public')->delete($hotel->CoverImage);
            }
            $validated['CoverImage'] = $request->file('CoverImage')->store('cover_images', 'public');
        }

        // Aggiornare l'hotel
        $hotel->update($validated);

        // Salvare le immagini aggiuntive se presenti
        if ($request->has('images')) {
            foreach ($request->file('images') as $key => $image) {
                $imagePath = $image->store('hotel_images', 'public');
                HotelImage::create([
                    'hotel_id' => $hotel->HotelID,
                    'image' => $imagePath,
                    'description' => $request->descriptions[$key] ?? null,
                ]);
            }
        }

        return redirect()->route('hotels.index')->with('success', 'Hotel updated successfully.');
    }

    public function destroy(Hotel $hotel)
    {
        // Eliminare l'immagine di copertura se esiste
        if ($hotel->CoverImage) {
            Storage::disk('public')->delete($hotel->CoverImage);
        }

        // Eliminare le immagini aggiuntive
        HotelImage::where('hotel_id', $hotel->HotelID)->delete();

        // Eliminare l'hotel
        $hotel->delete();

        return redirect()->route('hotels.index')->with('success', 'Hotel deleted successfully.');
    }
}
