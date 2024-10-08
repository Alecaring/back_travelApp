<!-- resources/views/flights/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Flight</h1>

        <form action="{{ route('flights.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="airlineName" class="form-label">Airline Name</label>
                <input type="text" class="form-control" id="airlineName" name="airlineName" value="{{ old('airlineName') }}">
                @error('airlineName')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sourceCity" class="form-label">Source City</label>
                <input type="text" class="form-control" id="sourceCity" name="sourceCity" value="{{ old('sourceCity') }}">
                @error('sourceCity')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="destinationCity" class="form-label">Destination City</label>
                <input type="text" class="form-control" id="destinationCity" name="destinationCity" value="{{ old('destinationCity') }}">
                @error('destinationCity')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="departureTime" class="form-label">Departure Time</label>
                <input type="datetime-local" class="form-control" id="departureTime" name="departureTime" value="{{ old('departureTime') }}">
                @error('departureTime')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="arrivalTime" class="form-label">Arrival Time</label>
                <input type="datetime-local" class="form-control" id="arrivalTime" name="arrivalTime" value="{{ old('arrivalTime') }}">
                @error('arrivalTime')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="LatitudeSource" class="form-label">Source Latitude</label>
                <input type="text" class="form-control" id="LatitudeSource" name="LatitudeSource" value="{{ old('LatitudeSource') }}">
                @error('LatitudeSource')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="LongitudeSource" class="form-label">Source Longitude</label>
                <input type="text" class="form-control" id="LongitudeSource" name="LongitudeSource" value="{{ old('LongitudeSource') }}">
                @error('LongitudeSource')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="LatitudeDest" class="form-label">Destination Latitude</label>
                <input type="text" class="form-control" id="LatitudeDest" name="LatitudeDest" value="{{ old('LatitudeDest') }}">
                @error('LatitudeDest')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="LongitudeDest" class="form-label">Destination Longitude</label>
                <input type="text" class="form-control" id="LongitudeDest" name="LongitudeDest" value="{{ old('LongitudeDest') }}">
                @error('LongitudeDest')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="InTime" class="form-label">In Time</label>
                <select class="form-select" id="InTime" name="InTime">
                    <option value="1" {{ old('InTime', true) ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ old('InTime') === '0' ? 'selected' : '' }}>No</option>
                </select>
                @error('InTime')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="CoverImage" class="form-label">Cover Image</label>
                <input type="file" class="form-control" id="CoverImage" name="CoverImage">
                @error('CoverImage')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="images" class="form-label">Additional Images</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple>
                @error('images.*')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="descriptions" class="form-label">Image Descriptions</label>
                <textarea class="form-control" id="descriptions" name="descriptions[]" rows="3"></textarea>
                @error('descriptions.*')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Flight</button>
        </form>
    </div>
@endsection
