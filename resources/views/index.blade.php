@extends('partials.layout')

@section('title')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{asset('css/index.css')}}">

<style>
    .outer-diamond {
        width: 25.25rem;
        /* Slightly larger than inner */
        height: 25.25rem;
        position: relative;
        transform: rotate(45deg);
        border-top: 8px solid #6d95d1;
        border-right: 8px solid #6d95d1;
        top: 70%;
    }


    .diamond-inner {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 141.42%;
        /* Approximately sqrt(2) to fill the diamond */
        height: 141.42%;
        transform: translate(-50%, -50%) rotate(-45deg);
        overflow: hidden;
    }

    .diamond-inner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .diamond-container {
        width: 100%;
        height: 100%;
        position: relative;
        overflow: hidden;
    }
</style>
@section('content')
<section class="container row justify-content-between w-100 m-0 mb-5 p-0">
    <div class="h-100 col-lg-9 mt-3">
        <div class="h-100 pt-5 px-5 mt-5">
            <div class="section-subtitle mb-5" style="font-stretch: expanded;">
                <h1><span style="font-size: 4rem;">Technical excellence in</span> <span style="color: #007bff; font-size:4rem;">Engineering</span> <span style="font-size: 3.3rem;">and</span> <span style="color: #007bff; font-size:4rem;">Health</span> <span style="font-size: 4rem;">projects</span></h1>
                <p class="lead text-wrap pe-3 mt-4" style="font-size: 1.5rem;">Delivering compliant, sustainable and technically sound architectural<br> & construction solutions | Advancing Health solutions.</p>
            </div>
            <div class="d-flex pe-2 mt-5">
                <a href="/contact" class="btn btn-primary btn-lg me-3 px-4">Book a Consultation</a>
                <a href="/services" class="btn btn-outline-primary btn-lg px-4 ms-4">View all Services</a>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="w-100 p-3">
        <div class="row align-items-center justify-content-center w-100">
            <!-- Diamond Image Column -->
            <div class="col-lg-4 ms-5 justify-content-center text-center">
                <div class="outer-diamond m-3 bg-white p-3 rounded">
                    <div class="diamond-container mx-auto">
                        <div class="diamond-inner">
                            <img src="{{ asset('images/carousel/carousel3.jpg') }}"
                                class="img-fluid"
                                alt="Engineering and Health Services">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Text Content Column -->
            <div class="col-lg-7 col-md-6">
                <div class="ps-lg-4">

                    <div class="section-title d-flex align-items-center mb-4">
                        <span class="line-divider d-inline-block me-3"
                            style="background-color: #007bff; width:3.5rem; height:0.25rem;"></span>
                        <h5 class="mb-0 fw-bold">Who We Are</h5>
                    </div>

                    <h1 class="mb-4"><P>
                        Building with <span class="text-primary">Integrity</span>,</p>
                        <p>Engineering with <span class="text-primary">Vision</span></p>
                    </h1>

                    <p class="lead mb-4">
                        We are <strong>DE-FORT</strong>, a full-service civil, structural, and general engineering
                        and construction firm dedicated to shaping resilient infrastructure and inspiring spaces.
                    </p>

                    <p class="lead">
                        For over 20 years, we've transformed complex challenges into enduring solutions.
                        Guided by an unwavering commitment to precision, true partnership, and continuous progress,
                        we don't just build structures — we build trust, foster innovation, and deliver legacies
                        that stand the test of time.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>


<section class="container-fluid pt-5 px-5 mb-3 pb-2 bg-body-tertiary my-3">
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
        <div class="d-md-flex flex-md-row mb-4 justify-content-between row">
            @foreach($posts as $post)
            <div class=" row col-lg-4 mb-sm-2 d-flex align-items-stretch mt-3">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden d-flex h-100 flex-column p-3">
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

                        <div class="d-flex align-items-center mt-4 align-items-end text-primary small">
                            <span class="me-2">📅</span>
                            {{ $post->published_at?->format('jS M, Y') ?? 'Draft' }}
                        </div>
                        <a href="{{ route('blog.show', $post) }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


</section>
@endsection