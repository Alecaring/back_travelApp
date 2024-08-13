<?php


namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\HotelImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Hotel::with('images')->get();  // Include le immagini
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'Name' => 'required|string|max:100',
        'City' => 'required|string|max:50',
        'Address' => 'required|string|max:255',
        'Latitude' => 'required|numeric|between:-90,90',
        'Longitude' => 'required|numeric|between:-180,180',
        'CoverImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    if ($request->hasFile('CoverImage')) {
        $coverImagePath = $request->file('CoverImage')->store('cover_images', 'public');
        $validatedData['CoverImage'] = $coverImagePath;
    }

    $hotel = Hotel::create($validatedData);

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imagePath = $image->store('hotel_images', 'public');
            HotelImage::create([
                'imagesHotelId' => $hotel->HotelID,
                'image' => $imagePath
            ]);
        }
    }

    return response()->json([
        'message' => 'Hotel creato con successo',
        'hotel' => $hotel->load('images')
    ], 201);
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hotel = Hotel::with('images')->findOrFail($id);  // Include le immagini

        return response()->json($hotel);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hotel = Hotel::findOrFail($id);

        $validatedData = $request->validate([
            'Name' => 'required|string|max:100',
            'City' => 'required|string|max:50',
            'Address' => 'required|string|max:255',
            'Latitude' => 'required|numeric|between:-90,90',
            'Longitude' => 'required|numeric|between:-180,180',
            'CoverImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('CoverImage')) {
            if ($hotel->CoverImage) {
                Storage::disk('public')->delete($hotel->CoverImage);  // Elimina la vecchia cover image
            }
            $coverImagePath = $request->file('CoverImage')->store('cover_images', 'public');
            $validatedData['CoverImage'] = $coverImagePath;
        }

        $hotel->update($validatedData);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('hotel_images', 'public');
                HotelImage::create([
                    'HotelID' => $hotel->HotelID,
                    'path' => $imagePath
                ]);
            }
        }

        return response()->json([
            'message' => 'Hotel aggiornato con successo',
            'hotel' => $hotel->load('images')  // Carica le immagini
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hotel = Hotel::findOrFail($id);

        // Elimina la cover image se esiste
        if ($hotel->CoverImage) {
            Storage::disk('public')->delete($hotel->CoverImage);
        }

        // Elimina le immagini collegate
        foreach ($hotel->images as $image) {
            Storage::disk('public')->delete($image->path);
            $image->delete();
        }

        $hotel->delete();

        return response()->json([
            'message' => 'Hotel eliminato con successo'
        ], 204);
    }
}

