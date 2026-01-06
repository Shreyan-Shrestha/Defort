@extends('partials.layout')

@section('title')
<style>
    .main-carousel .carousel-item {
        height: 80vh;
        min-height: 30vh;
    }

    .main-carousel img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }

    #previewThumbnail {
        width: 400px;
        height: 225px;
        /* 16:9 ratio to match main images */
        z-index: 10;
    }

    #previewThumbnail .preview-box {
        width: 100%;
        height: 100%;
        border: 6px solid #fff;
        border-radius: 16px;
        overflow: hidden;
        position: relative;
    }

    #previewImg {
        object-fit: cover;
        width: 100%;
        height: 100%;
        transition: transform 0.4s ease-in-out, opacity 0.2s ease-in-out; /* Slide + fade */
        transform: translateY(0); /* Default position */
        opacity: 1;
    }

    .container-relative {
        position: relative;
    }
</style>


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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const mainEl = document.getElementById('mainCarousel');
        const previewImg = document.getElementById('previewImg');
        const items = mainEl.querySelectorAll('.carousel-item');

        const getActiveIndex = () => {
            const activeItem = mainEl.querySelector('.carousel-item.active');
            return Array.from(items).indexOf(activeItem);
        };

        const updatePreview = () => {
            const activeIndex = getActiveIndex();
            const prevIndex = (activeIndex - 1 + items.length) % items.length;
            const newSrc = items[prevIndex].querySelector('img').src;

            // Preload new image
            const loader = new Image();
            loader.src = newSrc;

            loader.onload = () => {
                // Reset to top (off-screen) with low opacity
                previewImg.style.transition = 'none'; // Instant reset
                previewImg.style.transform = 'translateY(-100%)';
                previewImg.style.opacity = '1';

                // Force reflow to apply reset
                previewImg.offsetHeight;

                // Set new source
                previewImg.src = newSrc;

                // Enable transition and animate in
                previewImg.style.transition = 'transform 0.6s ease-in-out, opacity 0.6s ease-in-out';
                previewImg.style.transform = 'translateY(0)';
                previewImg.style.opacity = '1';
            };

            // If image already cached, run immediately
            if (loader.complete) {
                // Same reset + animate sequence
                previewImg.style.transition = 'none';
                previewImg.style.transform = 'translateY(-100%)';
                previewImg.style.opacity = '1';
                previewImg.offsetHeight;
                previewImg.src = newSrc;
                previewImg.style.transition = 'transform 0.6s ease-in-out, opacity 0.8s ease-in-out';
                previewImg.style.transform = 'translateY(0)';
                previewImg.style.opacity = '1';
            }
        };

        // Update + animate after every transition (next, prev, auto-cycle)
        mainEl.addEventListener('slid.bs.carousel', updatePreview);
    });
</script>

<div class="h-100 pt-5 px-5 pb-2 bg-body-tertiary border rounded-3 my-3">
    <div class="h-100 pt-5 mt-3">
        <h1 class="bg-dark-subtle d-inline px-2"> <a href="/projects">Our Projects</a> </h1>
        <p class="mt-2">We have successfully completed numerous projects across various sectors. Click to see more of our <a href="/projects"><u>Projects:</u></a></p>
        <div class="d-flex flex-row justify-content-between w-200 w-lg-50 mb-4 px-2">
            <div class="card shadow h-100 pt-3">
                <div class="card-body p-3">
                    <img src="{{ asset('images/project/narapark.jpg') }}" class="card-img-top img-fluid rounded mb-3" alt="" style="max-height: 150px; object-fit: cover;"></a>
                    <h5 class="card-title fs-4 text-center"><strong>Nara Park, Sankhamul</strong></h5>

                    <hr style="border: 1px solid black; width: 100%;">
                    </hr>
                </div>
            </div>
            <div class="card shadow h-100 pt-3">
                <div class="card-body p-3">
                    <img src="{{ asset('images/project/gagan.jpg')}}" class="card-img-top img-fluid rounded mb-3" alt="" style="max-height: 150px; object-fit: cover;"></a>
                    <h5 class="card-title fs-4 text-center"><strong>Gagan Apartments, Lalitpur</strong></h5>

                    <hr style="border: 1px solid black; width: 100%;">
                    </hr>
                </div>
            </div>
            <div class="card shadow h-100 pt-3">
                <div class="card-body p-3">
                    <img src="{{ asset('images/project/m10.jpg')}}" class="card-img-top img-fluid rounded mb-3" alt="" style="max-height: 150px; object-fit: cover;"></a>
                    <h5 class="card-title fs-4 text-center"><strong>Building Project, Lalitpur</strong></h5>
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