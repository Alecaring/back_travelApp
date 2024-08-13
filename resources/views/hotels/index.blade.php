<!-- resources/views/hotels/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Hotels</h1>
        <a href="{{ route('hotels.create') }}" class="btn btn-primary mb-4">Add New Hotel</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="row">
            @foreach ($hotels as $hotel)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if($hotel->CoverImage)
                            <img src="{{ asset('storage/' . $hotel->CoverImage) }}" class="card-img-top" alt="{{ $hotel->Name }}" style="height: 200px; object-fit: cover;">
                        @else
                            <div class="card-img-top d-flex justify-content-center align-items-center" style="height: 200px; background-color: #f8f9fa;">
                                <span class="text-muted">No Image</span>
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $hotel->Name }}</h5>
                            <p class="card-text">
                                <strong>City:</strong> {{ $hotel->City }}<br>
                                <strong>Address:</strong> {{ $hotel->Address }}<br>
                                <strong>Latitude:</strong> {{ $hotel->Latitude }}<br>
                                <strong>Longitude:</strong> {{ $hotel->Longitude }}
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('hotels.show', $hotel->HotelID) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('hotels.edit', $hotel->HotelID) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('hotels.destroy', $hotel->HotelID) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
