@extends('partials.adminlay')
@section('title','Admin Panel | Edit Service')
@section('content')
<div class="container-fullwidth mt-1 px-3 bg-white rounded shadow-sm pt-1">
    <h2 class="mb-4">Edit the details of Service</h2>
    <p class="text-muted">Use the form below to update the details of the service card. You can change the image, title, and description to keep your service offerings current and engaging.</p>
    <form action="{{ route('admin.service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="image" class="form-label">Current Image for {{ $service->title }} : </label>
            
            @if($service->image)
            <img src="{{ asset($service->image) }}" alt="Service Image" class="img-fluid mt-2 ps-5" style="max-height: 11rem;">
            <p class="mt-2">Upload a new image to replace the current one:</p>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
            
            @else
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
            
            @endif
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Service Title</label><span class="lead fs-6"> ( Max 80 characters)</span>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $service->title) }}" placeholder="Enter service title">
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Service Description </label><span class="lead fs-6"> ( Max 1000 characters)</span>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" placeholder="Edit service description (Max 1000 characters)">{{ old('description', $service->description) }}</textarea>
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Service</button>
        <a href="{{ route('admin.services') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection