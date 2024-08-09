<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Hotel::all();
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
            'Name' => 'required|string|max:100',
            'City' => 'required|string|max:50',
            'Address' => 'required|string|255',
            'Latitude' => 'required|decimal|9, 6',
            'Longitude' => 'required|decimal|9, 6',
        ]);

        $hotel = Hotel::create($validatedData);

        return response()->json($hotel, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hotel = Hotel::findOrFail($id);

        return response()->json($hotel);
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
        $hotel = Hotel::findOrFail($id);

        $validatedData = $request->validate([
            'Name' => 'required|string|max:100',
            'City' => 'required|string|max:50',
            'Address' => 'required|string|255',
            'Latitude' => 'required|decimal|9, 6',
            'Longitude' => 'required|decimal|9, 6',
        ]);

        $hotel->update($validatedData);

        return response()->json($hotel, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hotel = Hotel::findOrFail($id);

        $hotel->delete();

        return response()->json(null, 204);
    }
}
