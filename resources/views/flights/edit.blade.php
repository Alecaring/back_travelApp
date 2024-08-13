<!-- resources/views/flights/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Flight</h1>

        <form action="{{ route('flights.update', $flight->FlightId) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="airlineName" class="form-label">Airline Name</label>
                <input type="text" class="form-control" id="airlineName" name="airlineName" value="{{ old('airlineName', $flight->airlineName) }}">
                @error('airlineName')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sourceCity" class="form-label">Source City</label>
                <input type="text" class="form-control" id="sourceCity" name="sourceCity" value="{{ old('sourceCity', $flight->sourceCity) }}">
                @error('sourceCity')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="destinationCity" class="form-label">Destination City</label>
                <input type="text" class="form-control" id="destinationCity" name="destinationCity" value="{{ old('destinationCity', $flight->destinationCity) }}">
                @error('destinationCity')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="departureTime" class="form-label">Departure Time</label>
                <input type="datetime-local" class="form-control" id="departureTime" name="departureTime" value="{{ old('departureTime', $flight->departureTime ? $flight->departureTime->format('Y-m-d\TH:i') : '') }}">
                @error('departureTime')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="arrivalTime" class="form-label">Arrival Time</label>
                <input type="datetime-local" class="form-control" id="arrivalTime" name="arrivalTime" value="{{ old('arrivalTime', $flight->arrivalTime ? $flight->arrivalTime->format('Y-m-d\TH:i') : '') }}">
                @error('arrivalTime')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="LatitudeSource" class="form-label">Source Latitude</label>
                <input type="text" class="form-control" id="LatitudeSource" name="LatitudeSource" value="{{ old('LatitudeSource', $flight->LatitudeSource) }}">
                @error('LatitudeSource')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="LongitudeSource" class="form-label">Source Longitude</label>
                <input type="text" class="form-control" id="LongitudeSource" name="LongitudeSource" value="{{ old('LongitudeSource', $flight->LongitudeSource) }}">
                @error('LongitudeSource')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="LatitudeDest" class="form-label">Destination Latitude</label>
                <input type="text" class="form-control" id="LatitudeDest" name="LatitudeDest" value="{{ old('LatitudeDest', $flight->LatitudeDest) }}">
                @error('LatitudeDest')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="LongitudeDest" class="form-label">Destination Longitude</label>
                <input type="text" class="form-control" id="LongitudeDest" name="LongitudeDest" value="{{ old('LongitudeDest', $flight->LongitudeDest) }}">
                @error('LongitudeDest')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="InTime" class="form-label">In Time</label>
                <select class="form-select" id="InTime" name="InTime">
                    <option value="1" {{ old('InTime', $flight->InTime) ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ old('InTime', $flight->InTime) === '0' ? 'selected' : '' }}>No</option>
                </select>
                @error('InTime')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="CoverImage" class="form-label">Cover Image</label>
                <input type="file" class="form-control" id="CoverImage" name="CoverImage">
                @if ($flight->CoverImage)
                    <img src="{{ Storage::url($flight->CoverImage) }}" alt="Current Cover Image" class="img-thumbnail mt-2" style="max-width: 200px;">
                @endif
                @error('CoverImage')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="images" class="form-label">Additional Images</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple>
                @if ($flight->images)
                    <div class="mt-2">
                        @foreach ($flight->images as $image)
                            <img src="{{ Storage::url($image->image) }}" alt="Flight Image" class="img-thumbnail" style="max-width: 200px;">
                        @endforeach
                    </div>
                @endif
                @error('images.*')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="descriptions" class="form-label">Image Descriptions</label>
                @foreach ($flight->images as $key => $image)
                    <textarea class="form-control" id="descriptions_{{ $key }}" name="descriptions[]" rows="2">{{ old('descriptions.' . $key, $image->description) }}</textarea>
                @endforeach
                @error('descriptions.*')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Flight</button>
        </form>
    </div>
@endsection
