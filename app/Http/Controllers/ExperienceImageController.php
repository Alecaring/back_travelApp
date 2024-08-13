<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\ExperienceImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExperienceImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'experience_id' => 'required|exists:experiences,ExperienceId',
            'image' => 'required|image',
            'description' => 'nullable|string|max:255',
        ]);

        $imagePath = $request->file('image')->store('experience_images', 'public');

        ExperienceImage::create([
            'experience_id' => $request->experience_id,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('experiences.show', $request->experience_id)
                         ->with('success', 'Image added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'experience_id' => 'required|exists:experiences,ExperienceId',
            'description' => 'nullable|string|max:255',
            'image' => 'nullable|image',
        ]);

        $experienceImage = ExperienceImage::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($experienceImage->image);
            $imagePath = $request->file('image')->store('experience_images', 'public');
            $experienceImage->image = $imagePath;
        }

        $experienceImage->description = $request->description;
        $experienceImage->save();

        return redirect()->route('experiences.show', $request->experience_id)
                         ->with('success', 'Image updated successfully.');
    }

    public function destroy($id)
    {
        $experienceImage = ExperienceImage::findOrFail($id);
        Storage::disk('public')->delete($experienceImage->image);
        $experienceImage->delete();

        return back()->with('success', 'Image deleted successfully.');
    }
}
