@extends('partials.layout')
@section('content')
<div class="container">
    <article>
        @if($post->featured_image)
        <img src="{{ asset('storage/' . $post->featured_image) }}" class="img-fluid rounded mb-4" alt="{{ $post->title }}">
        @else
        <img src="https://placehold.co/1200x400?text={{ $post->title }}" class="img-fluid rounded mb-4" alt="{{ $post->title }}">
        @endif

        <h1 class="display-4">{{ $post->title }}</h1>
        <p class="text-muted small">
            {{ $post->published_at?->format('M d, Y') ?? 'Draft' }}
            @if($post->category)
            • {{ $post->category->name }}
            @endif
            @if($post->tags->isNotEmpty())
            • {{ $post->tags->pluck('name')->implode(', ') }}
            @endif
        </p>

        <div class="content mt-5">
            {!! $post->body !!}
        </div>
    </article>
</div>
@endsection