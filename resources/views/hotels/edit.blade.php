<!-- resources/views/hotels/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('hotels.update', $hotel) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Campi del modulo -->

        <button type="submit" class="btn btn-primary">Update Hotel</button>
    </form>
</div>
@endsection
