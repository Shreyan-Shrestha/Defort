@extends('partials.layout')

@section('title')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('js/carousel.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/index.css')}}">


@section('content')
<div class="container-fluid d-flex flex-row justify-content-between" style="height: 90vh;">
    <div class="h-100 mt-5 w-50">
        <div class="h-100 pt-5  px-5 mt-5">
            <h1 class="px-2">Technical excellence in <span style="color: #007bff;">Engineering</span> and <span style="color: #007bff;">Health</span> projects.</h1>
            <p class="lead text-wrap px-2 mt-3">Delivering compliant, sustainable and technically sound architectural & construction solutions | Advancing Health solutions.</p>
            <div class="d-flex px-2 mt-5">
                <a href="/contact" class="btn btn-primary btn-lg me-3 px-4">Book a Consultation</a>
                <a href="/services" class="btn btn-outline-primary btn-lg px-4 ms-4">View all Services</a>
            </div>
        </div>
    </div>

    <div class="my-3 me-lg-3 container-relative position-relative">
        <!-- Main Carousel with Fade -->
        <div id="mainCarousel" class="carousel slide carousel-fade main-carousel position-relative" style="width:60vh;" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-inner rounded-4" style="height: 90%;">
                <div class="carousel-item active">
                    <img src="{{ asset('images/carousel/carousel1.jpg') }}" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/carousel/carousel2.jpg') }}" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/carousel/carousel3.jpg') }}" alt="Slide 3">
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!--Preview Thumbnail -->
        <div id="previewThumbnail" class="position-absolute" style="height: 30%; width:50vh; top:70%; right: 35%;">
            <div class="preview-box">
                <img id="previewImg" src="{{ asset('images/carousel/defort.jpg') }}" alt="Preview">
            </div>
        </div>
    </div>
</div>


<div class="h-100 pt-5 px-5 pb-2 bg-body-tertiary border rounded-3 my-3">
    <div class="h-100 pt-5 mt-3">
        <div class="d-flex flex-column align-items-center mb-4">
            <div class="bg-primary-subtle text-primary rounded-3 px-3 mb-3">News and Updates</div>
            <h2 class="mb-3">Our Blogs</h2>
            <p class="lead text-center px-5">Latest updates, information, advice and news</p>
        </div>
        <div class="d-flex flex-row justify-content-between w-200 w-lg-50 mb-4 px-2">
            <div class="card shadow h-100 pt-3">
                <div class="card-body p-3">
                    <img src="{{ asset('images/project/narapark.jpg') }}" class="card-img-top img-fluid rounded mb-3" alt="" style="max-height: 150px; object-fit: cover;"></a>
                    <h5 class="card-title fs-4 text-center"><strong>Nara Park, Sankhamul</strong></h5>

                    <hr style="border: 1px solid black; width: 100%;">
                    </hr>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 text-center">
        <a href="{{ route('blog.index') }}" class="btn btn-primary btn-lg mx-3">
            View Blog Posts
        </a>

        <a href="{{ route('blog.admin.posts.index') }}" class="btn btn-warning btn-lg mx-3">
            Manage Blog (Admin)
        </a>
    </div>
</div>
@endsection