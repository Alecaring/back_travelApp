<!-- resources/views/hotels/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Hotels</h1>
        <a href="{{ route('hotels.create') }}" class="btn btn-primary">Add New Hotel</a>

        

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>CoverImage</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hotels as $hotel)
                    <tr>
                        <td>{{ $hotel->Name }}</td>
                        <td>{{ $hotel->City }}</td>
                        <td>{{ $hotel->Address }}</td>
                        <td>{{ $hotel->Latitude }}</td>
                        <td>{{ $hotel->Longitude }}</td>
                        <td>{{ $hotel->CoverImage }}</td>
                        {{-- <td>
                        <img src="{{ asset('storage/' . $hotel->CoverImage) }}" alt="nooooooooooo">
                        </td> --}}
                        
                            {{-- <a href="{{ route('hotels.show', ['hotel' => $hotel->id]) }}" class="btn btn-info">View</a>
                            <a href="{{ route('hotels.edit', ['hotel' => $hotel->id]) }}" class="btn btn-warning">Edit</a> --}}
                            {{-- <form action="{{ route('hotels.destroy', ['hotel' => $hotel->id]) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> --}}

                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
