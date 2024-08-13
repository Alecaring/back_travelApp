<!-- resources/views/hotels/create.blade.php -->
@extends('layouts.app')

@section('content')


<div class="container">
    <h1>Create Hotel</h1>
    <form action="{{ route('hotels.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" name="Name" id="Name" value="{{ old('Name') }}">
            @error('Name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="City">City</label>
            <input type="text" class="form-control" name="City" id="City" value="{{ old('City') }}">
            @error('City')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="Address">Address</label>
            <input type="text" class="form-control" name="Address" id="Address" value="{{ old('Address') }}">
            @error('Address')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="Latitude">Latitude</label>
            <input type="text" class="form-control" name="Latitude" id="Latitude" value="{{ old('Latitude') }}">
            @error('Latitude')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="Longitude">Longitude</label>
            <input type="text" class="form-control" name="Longitude" id="Longitude" value="{{ old('Longitude') }}">
            @error('Longitude')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="CoverImage">Cover Image</label>
            <input type="file" class="form-control" name="CoverImage" id="CoverImage">
            @error('CoverImage')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="images">Additional Images</label>
            <input type="file" class="form-control" name="images[]" multiple>
            @error('images.*')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="descriptions">Descriptions</label>
            <textarea class="form-control" name="descriptions[]" rows="3">{{ old('descriptions')[0] ?? '' }}</textarea>

            @error('descriptions.*')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save Hotel</button>
    </form>
    @php
    dd(old('descriptions'));
@endphp
</div>
@endsection
