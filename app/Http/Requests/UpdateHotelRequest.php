<?php

// app/Http/Requests/UpdateHotelRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHotelRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Name' => 'required|string|max:100',
            'City' => 'required|string|max:50',
            'Address' => 'nullable|string|max:255',
            'Latitude' => 'nullable|numeric|between:-90,90',
            'Longitude' => 'nullable|numeric|between:-180,180',
            'CoverImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'descriptions.*' => 'nullable|string|max:255',
        ];
    }
}
