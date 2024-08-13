<!-- resources/views/flights/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Flights</h1>
        <a href="{{ route('flights.create') }}" class="btn btn-primary mb-4">Create New Flight</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($flights->count())
            <div class="row">
                @foreach ($flights as $flight)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            @if ($flight->CoverImage)
                                <img src="{{ asset('storage/' . $flight->CoverImage) }}" class="card-img-top"
                                    alt="Cover Image" style="height: 200px; object-fit: cover;">
                            @else
                                <div class="card-img-top d-flex justify-content-center align-items-center"
                                    style="height: 200px; background-color: #f8f9fa;">
                                    <span class="text-muted">No Image</span>
                                </div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">
                                    @switch($flight->airlineName)
                                        @case('Ryanair')
                                            <img src="{{ asset('images/ryanair-logo.png') }}" alt="Ryanair Logo"
                                                style="width: 100px; height: auto;" class="d-inline-block ml-2">
                                        @break

                                        @case('American Airlines')
                                            <img src="{{ asset('images/American-Airlines-Logo.png') }}" alt="EasyJet Logo"
                                                style="width: 100px; height: auto;" class="d-inline-block ml-2">
                                        @break
                                        @case('Singapore Airlines')
                                            <img src="{{ asset('images/Singapore-Airlines.png') }}" alt="EasyJet Logo"
                                                style="width: 100px; height: auto;" class="d-inline-block ml-2">
                                        @break
                                        @case('EasyJet')
                                            <img src="{{ asset('images/EasyJet-Logo.png') }}" alt="EasyJet Logo"
                                                style="width: 100px; height: auto;" class="d-inline-block ml-2">
                                        @break

                                        @case('Lufthansa')
                                            <img src="{{ asset('images/Lufthansa-logo.png') }}" alt="Lufthansa Logo"
                                                style="width: 100px; height: auto;" class="d-inline-block ml-2">
                                        @break

                                        @case('Delta Airlines')
                                            <img src="{{ asset('images/Delta-Air-Lines-Logo.png') }}" alt="Alitalia Logo"
                                                style="width: 100px; height: auto;" class="d-inline-block ml-2">
                                        @break

                                        @case('JetBlue')
                                            <img src="{{ asset('images/JetBlue-Logo.jpg') }}" alt="Alitalia Logo"
                                                style="width: 100px; height: auto;" class="d-inline-block ml-2">
                                        @break

                                        @case('Alaska Airlines')
                                            <img src="{{ asset('images/Alaska-Airlines-logo.webp') }}" alt="Alitalia Logo"
                                                style="width: 100px; height: auto;" class="d-inline-block ml-2">
                                        @break

                                        @case('British Airways')
                                            <img src="{{ asset('images/British-Airways-Logo.png') }}" alt="Alitalia Logo"
                                                style="width: 100px; height: auto;" class="d-inline-block ml-2">
                                        @break
                                        
                                        @case('Emirates')
                                            <img src="{{ asset('images/Emirates.jpg') }}" alt="Alitalia Logo"
                                                style="width: 100px; height: auto;" class="d-inline-block ml-2">
                                        @break

                                        @default
                                            <span class="text-muted">No Logo Available</span>
                                    @endswitch
                                </h5>
                                <p class="card-text">
                                    <strong>Source City:</strong> {{ $flight->sourceCity }}<br>
                                    <strong>Destination City:</strong> {{ $flight->destinationCity }}<br>
                                    <strong>Departure Time:</strong> {{ $flight->departureTime }}<br>
                                    <strong>Arrival Time:</strong> {{ $flight->arrivalTime }}<br>
                                    <strong>Latitude Source:</strong> {{ $flight->LatitudeSource }}<br>
                                    <strong>Longitude Source:</strong> {{ $flight->LongitudeSource }}<br>
                                    <strong>Latitude Destination:</strong> {{ $flight->LatitudeDest }}<br>
                                    <strong>Longitude Destination:</strong> {{ $flight->LongitudeDest }}<br>
                                    <strong>In Time:</strong> {{ $flight->InTime ? 'Yes' : 'No' }}
                                </p>
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('flights.show', $flight->FlightId) }}"
                                        class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('flights.edit', $flight->FlightId) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('flights.destroy', $flight->FlightId) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No flights available.</p>
        @endif
    </div>
@endsection
