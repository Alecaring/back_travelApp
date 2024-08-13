@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Experiences</h1>

        <a href="{{ route('experiences.create') }}" class="btn btn-primary mb-3">Add New Experience</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <ul class="list-group">
                    @forelse ($experiences as $experience)
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5>{{ $experience->name }}</h5>
                                    <p>{{ $experience->location }}</p>
                                </div>
                                <div>
                                    <a href="{{ route('experiences.show', $experience->ExperienceId) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('experiences.edit', $experience->ExperienceId) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('experiences.destroy', $experience->ExperienceId) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @empty
                        <li class="list-group-item">No experiences found.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
