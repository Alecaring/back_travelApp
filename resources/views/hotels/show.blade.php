<!-- resources/views/hotels/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $hotel->Name }}</h1>
    <p>City: {{ $hotel->City }}</p>
    <p>Address: {{ $hotel->Address }}</p>
    <!-- Mostra altre informazioni dell'hotel -->

    <a href="{{ route('hotels.edit', $hotel) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('hotels.destroy', $hotel) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('hotels.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
