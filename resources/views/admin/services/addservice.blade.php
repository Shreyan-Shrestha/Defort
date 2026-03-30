@extends('partials.adminlay')
@section('title','Admin Panel | Add a Service')
@section('content')
<div class="content mt-5 px-5 bg-white rounded shadow-sm">
    <h2 class="mb-4">Add New Service Card</h2>
    <p class="lead">Fill out the form below to add a new service card to your website.</p>
    <form action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Image <span class="form-text text-muted">(Max 5mb)</span></label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Service Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" placeholder="Enter service title">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Service Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" placeholder="Enter service description (Max 1000 characters)">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add Service</button>
        <a href="{{ route('admin.services') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection