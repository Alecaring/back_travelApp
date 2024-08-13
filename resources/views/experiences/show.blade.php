@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Experience Details</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $experience->name }}</h5>
                <p class="card-text"><strong>Location:</strong> {{ $experience->location }}</p>

                @if ($experience->cover_image)
                    <div class="mb-3">
                        <strong>Cover Image:</strong>
                        <img src="{{ Storage::url($experience->cover_image) }}" alt="Cover Image" class="img-thumbnail" style="max-width: 300px;">
                    </div>
                @endif

                <h4>Experience Images</h4>
                <div class="mb-3">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addImageModal">Add New Image</button>
                </div>

                @if ($experience->images->isNotEmpty())
                    <div class="mt-4">
                        <div class="row">
                            @foreach ($experience->images as $image)
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="{{ Storage::url($image->image) }}" alt="Image" class="card-img-top" style="height: 150px; object-fit: cover;">
                                        <div class="card-body">
                                            <p class="card-text">{{ $image->description }}</p>
                                            <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editImageModal" data-id="{{ $image->id }}" data-image="{{ $image->image }}" data-description="{{ $image->description }}">Edit</a>
                                            <form action="{{ route('experience_images.destroy', $image->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <p>No images available for this experience.</p>
                @endif
            </div>
        </div>

        <a href="{{ route('experiences.index') }}" class="btn btn-secondary mt-3">Back to List</a>
    </div>

    <!-- Add Image Modal -->
    <div class="modal fade" id="addImageModal" tabindex="-1" aria-labelledby="addImageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('experience_images.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addImageModalLabel">Add New Image</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="experience_id" value="{{ $experience->ExperienceId }}">

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" required>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description') }}">
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Image Modal -->
    <div class="modal fade" id="editImageModal" tabindex="-1" aria-labelledby="editImageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editImageForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editImageModalLabel">Edit Image</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="experience_id" value="{{ $experience->ExperienceId }}">
                        <input type="hidden" id="edit_image_id" name="image_id">

                        <div class="mb-3">
                            <label for="edit_image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="edit_image" name="image">
                            <img id="edit_image_preview" class="img-thumbnail mt-2" style="max-width: 200px;">
                        </div>

                        <div class="mb-3">
                            <label for="edit_description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="edit_description" name="description">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const editImageModal = document.getElementById('editImageModal');
                editImageModal.addEventListener('show.bs.modal', function (event) {
                    const button = event.relatedTarget;
                    const imageId = button.getAttribute('data-id');
                    const imageSrc = button.getAttribute('data-image');
                    const description = button.getAttribute('data-description');

                    const form = document.getElementById('editImageForm');
                    form.action = `/experience-images/${imageId}`;
                    form.querySelector('#edit_image_id').value = imageId;
                    form.querySelector('#edit_description').value = description;
                    if (imageSrc) {
                        const preview = document.getElementById('edit_image_preview');
                        preview.src = `/storage/${imageSrc}`;
                    } else {
                        const preview = document.getElementById('edit_image_preview');
                        preview.src = '';
                    }
                });
            });
        </script>
    @endpush
@endsection
