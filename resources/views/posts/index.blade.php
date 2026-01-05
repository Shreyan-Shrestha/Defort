@extends('partials.layout')
@section('content')
<div class="container">
    <h1 class="display-4 mb-4">Blogs</h1>

    <div class="column w-100">
        @foreach($posts as $post)
            <div class="col-md mb-4">
                <div class="card">
                    @if($post->featured_image)
                        <img class="img-fluid" src="{{ asset('storage/' . $post->featured_image) }}" class="card-img-top" alt="{{ $post->title }}" style="height: 300px; object-fit: cover;">
                    @else
                        <img class="img-fluid" src="https://placehold.co/600x200?text={{ $post->title }}" class="card-img-top" alt="{{ $post->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a></h5>
                        <p class="text-muted small"> {{ $post->published_at->format('M d, Y') }}
                            @if($post->category) • {{ $post->category->name }} @endif
                            @if($post->tags->isNotEmpty()) • {{ $post->tags->pluck('name')->implode(', ') }} @endif
                        </p>
                        <p class="card-text">{{ $post->excerpt }}...</p>
                        <div class="mt-auto">
                        <a href="{{ route('blog.show', $post) }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $posts->links() }}
</div>
@endsection