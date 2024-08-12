@extends('layout.admin');

@section('content')
    <h1>Upload Image for Flight</h1>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form per l'upload dell'immagine -->
    <form action="{{ route('flights.upload-image', ['flightId' => $flightId]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="image">Choose an image:</label>
            <input type="file" name="image" id="image" required>
        </div>
        <div>
            <button type="submit">Upload Image</button>
        </div>
    </form>
@endsection
