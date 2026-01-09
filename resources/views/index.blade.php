@extends('partials.layout')

@section('title')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{asset('css/index.css')}}">

@section('content')
<div class="container row justify-content-between">
    <div class="h-100 col-lg-8 mt-3">
        <div class="h-100 pt-5 px-5 mt-5">
            <h1><span style="font-size: 4rem;">Technical excellence in</span> <span style="color: #007bff; font-size:4rem;">Engineering</span> <span style="font-size: 3.3rem;">and</span> <span style="color: #007bff; font-size:4rem;">Health</span> <span style="font-size: 4rem;">projects</span></h1>
            <p class="lead text-wrap pe-3 mt-4" style="font-size: 1.5rem;">Delivering compliant, sustainable and technically sound architectural<br> & construction solutions | Advancing Health solutions.</p>
            <div class="d-flex pe-2 mt-5">
                <a href="/contact" class="btn btn-primary btn-lg me-3 px-4">Book a Consultation</a>
                <a href="/services" class="btn btn-outline-primary btn-lg px-4 ms-4">View all Services</a>
            </div>
        </div>
    </div>

</div>


<div class="container-fluid pt-5 px-5 mb-3 pb-2 bg-body-tertiary my-3">
    <div class="pt-5 mt-3">
        <div class="d-flex flex-column mb-4">
            <div class="section-title d-flex align-items-center">
                <span class="line-divider d-inline-block me-3" style="background-color: #007bff; width:3rem; height:0.2rem;"></span>
                <h5><span class="fw-bold"> Our Blogs & Articles</span></h5>
            </div>
            <div class="row">
                <div class="section-subtitle mt-2 col-lg-9 align-items-center d-flex justify-content-lg-start justify-content-center">
                    <h1>Latest <span style="color: #007bff;">updates</span>, built insights, and <span style="color: #007bff;">expert</span> news </h2>
                </div>
                <div class="container my-3 text-center col-lg-3 d-flex justify-content-lg-end justify-content-center align-items-center justify-content-sm-start">
                    <a href="{{ route('blog.index') }}" class="btn btn-outline-primary px-3 mx-3">
                        View All Blogs ->
                    </a>
                </div>
            </div>
        </div>
        <div class="d-md-flex flex-md-row mb-4 px-2">
            @foreach($posts as $post)
            <div class=" col-lg-4 me-2 mb-sm-2">
                <a href="{{ route('blog.show', $post) }}" class="text-decoration-none text-dark">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden d-flex flex-column px-3">
                        <div class="position-relative">
                            @if($post->featured_image)
                            <img src="{{ asset('storage/' . $post->featured_image) }}" class="card-img-top" alt="{{ $post->title }}" style="height: 250px; object-fit: cover;">
                            @else
                            <img src="https://placehold.co/400x250?text={{ $post->title }}" class="card-img-top" alt="{{ $post->title }}">
                            @endif

                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge bg-warning-subtle text-warning rounded-pill px-3 py-2">
                                    {{ $post->category?->name ?? 'Uncategorized' }}
                                </span>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class=" align-items-center mb-3 text-primary small">
                                <span class="me-2">⏱</span>
                                {{ $post->read_time ?? '5 min read' }}
                            </div>
                            <h5 class="card-title fw-bold mb-3">{{ $post->title }}</h5>

                            <p class="card-text text-muted lead small">{{ $post->excerpt }}...
                            </p>

                            <div class="d-flex align-items-center mt-4 text-primary small">
                                <span class="me-2">📅</span>
                                {{ $post->published_at?->format('jS M, Y') ?? 'Draft' }}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>


</div>
@endsection