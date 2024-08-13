@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Experience</h1>

        <form action="{{ route('experiences.update', $experience->ExperienceId) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $experience->name) }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ old('location', $experience->location) }}">
                @error('location')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="cover_image">Cover Image</label>
                <input type="file" class="form-control @error('cover_image') is-invalid @enderror" id="cover_image" name="cover_image">
                @error('cover_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if ($experience->cover_image)
                    <div class="mt-2">
                        <img src="{{ Storage::url($experience->cover_image) }}" alt="Cover Image" class="img-thumbnail" style="max-width: 200px;">
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

        <a href="{{ route('experiences.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>
@endsection
