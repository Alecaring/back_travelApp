<!-- resources/views/flights/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Flights</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('flights.create') }}" class="btn btn-primary mb-3">Create New Flight</a>

        @if($flights->count())
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Airline Name</th>
                        <th>Source City</th>
                        <th>Destination City</th>
                        <th>Departure Time</th>
                        <th>Arrival Time</th>
                        <th>Latitude Source</th>
                        <th>Longitude Source</th>
                        <th>Latitude Destination</th>
                        <th>Longitude Destination</th>
                        <th>In Time</th>
                        <th>Cover Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($flights as $flight)
                        <tr>
                            <td>{{ $flight->airlineName }}</td>
                            <td>{{ $flight->sourceCity }}</td>
                            <td>{{ $flight->destinationCity }}</td>
                            <td>{{ $flight->departureTime }}</td>
                            <td>{{ $flight->arrivalTime }}</td>
                            <td>{{ $flight->LatitudeSource }}</td>
                            <td>{{ $flight->LongitudeSource }}</td>
                            <td>{{ $flight->LatitudeDest }}</td>
                            <td>{{ $flight->LongitudeDest }}</td>
                            <td>{{ $flight->InTime ? 'Yes' : 'No' }}</td>
                            <td>
                                @if($flight->CoverImage)
                                    <img src="{{ asset('storage/' . $flight->CoverImage) }}" alt="Cover Image" style="width: 100px; height: auto;">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('flights.show', $flight->FlightId) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('flights.edit', $flight->FlightId) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('flights.destroy', $flight->FlightId) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No flights available.</p>
        @endif
    </div>
@endsection
