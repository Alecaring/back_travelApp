<!-- resources/views/flights/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Flight Details</h1>

        <div class="card">
            <div class="card-body">
                <!-- Display Airline Name -->
                <h5 class="card-title">{{ $flight->airlineName }}</h5>

                <!-- Display Source and Destination Cities -->
                <p class="card-text"><strong>Source City:</strong> {{ $flight->sourceCity }}</p>
                <p class="card-text"><strong>Destination City:</strong> {{ $flight->destinationCity }}</p>

                <!-- Display Departure and Arrival Times -->
                <p class="card-text">
                    <strong>Departure Time:</strong> 
                    {{ isset($flight->departureTime) ? \Carbon\Carbon::parse($flight->departureTime)->format('Y-m-d H:i') : 'N/A' }}
                </p>
                <p class="card-text">
                    <strong>Arrival Time:</strong> 
                    {{ isset($flight->arrivalTime) ? \Carbon\Carbon::parse($flight->arrivalTime)->format('Y-m-d H:i') : 'N/A' }}
                </p>

                <!-- Display Source and Destination Coordinates -->
                <p class="card-text">
                    <strong>Source Coordinates:</strong> 
                    {{ $flight->LatitudeSource && $flight->LongitudeSource ? $flight->LatitudeSource . ', ' . $flight->LongitudeSource : 'N/A' }}
                </p>
                <p class="card-text">
                    <strong>Destination Coordinates:</strong> 
                    {{ $flight->LatitudeDest && $flight->LongitudeDest ? $flight->LatitudeDest . ', ' . $flight->LongitudeDest : 'N/A' }}
                </p>
                
                <!-- Display On Time Status -->
                <p class="card-text">
                    <strong>On Time:</strong> {{ $flight->InTime ? 'Yes' : 'No' }}
                </p>

                <!-- Display Cover Image -->
                @if ($flight->CoverImage)
                    <div class="mb-3">
                        <strong>Cover Image:</strong>
                        <img src="{{ Storage::url($flight->CoverImage) }}" alt="Cover Image" class="img-thumbnail" style="max-width: 300px;">
                    </div>
                @endif

                <!-- Display Additional Images if any -->
                @if (isset($flight->images) && $flight->images->isNotEmpty())
                    <div class="mt-4">
                        <strong>Additional Images:</strong>
                        @foreach ($flight->images as $image)
                            <div class="mb-3">
                                <img src="{{ Storage::url($image->image) }}" alt="Flight Image" class="img-thumbnail" style="max-width: 200px;">
                                <p class="mt-1">{{ $image->description }}</p>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <!-- Back Button -->
        <a href="{{ route('flights.index') }}" class="btn btn-secondary mt-3">Back to Flights</a>
    </div>
@endsection
