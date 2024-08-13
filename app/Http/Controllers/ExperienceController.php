<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the experiences.
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('experiences.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new experience.
     */
    public function create()
    {
        return view('experiences.create');
    }

    /**
     * Store a newly created experience in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'location' => 'nullable|string|max:255',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only(['name', 'location']);

        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('public/experience_images');
            $data['cover_image'] = str_replace('public/', '', $path);
        }

        Experience::create($data);

        return redirect()->route('experiences.index')->with('success', 'Experience created successfully.');
    }

    /**
     * Display the specified experience.
     */
    public function show($id)
    {
        $experience = Experience::where('ExperienceId', $id)->firstOrFail();
        return view('experiences.show', compact('experience'));
    }

    /**
     * Show the form for editing the specified experience.
     */
    public function edit($id)
    {
        $experience = Experience::where('ExperienceId', $id)->firstOrFail();
        return view('experiences.edit', compact('experience'));
    }

    /**
     * Update the specified experience in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'location' => 'nullable|string|max:255',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $experience = Experience::where('ExperienceId', $id)->firstOrFail();

        $data = $request->only(['name', 'location']);

        if ($request->hasFile('cover_image')) {
            // Delete old cover image if exists
            if ($experience->cover_image) {
                Storage::delete('public/' . $experience->cover_image);
            }

            $path = $request->file('cover_image')->store('public/experience_images');
            $data['cover_image'] = str_replace('public/', '', $path);
        }

        $experience->update($data);

        return redirect()->route('experiences.index')->with('success', 'Experience updated successfully.');
    }

    /**
     * Remove the specified experience from storage.
     */
    public function destroy($id)
    {
        $experience = Experience::where('ExperienceId', $id)->firstOrFail();

        // Delete cover image if exists
        if ($experience->cover_image) {
            Storage::delete('public/' . $experience->cover_image);
        }

        $experience->delete();

        return redirect()->route('experiences.index')->with('success', 'Experience deleted successfully.');
    }
}
