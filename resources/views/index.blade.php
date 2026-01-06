@extends('partials.layout')

@section('title')
<style>
    .main-carousel .carousel-item {
        height: 80vh;
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
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.4);
    }

    #previewImg {
        object-fit: cover;
        width: 100%;
        height: 100%;
        transition: opacity 0.3s ease;
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

    <div class="my-3 me-3">
        <!-- Main Carousel with Fade -->
        <div id="mainCarousel" class="carousel slide carousel-fade main-carousel position-relative" style="width:60vh;" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-inner rounded-4" style="height: 90%;">
                <div class="carousel-item active">
                    <img src="{{ asset('images/carousel/carousel1.jpg') }}" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/carousel/m10.jpg') }}" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/carousel/gagan.jpg') }}" alt="Slide 3">
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

        <!-- Single Preview Thumbnail -->
        <div id="previewThumbnail" class="position-absolute" style="height: 30%; width:50vh; top:65%; right: 15%;">
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
        const mainCarousel = bootstrap.Carousel.getOrCreateInstance(mainEl);

        // Update preview to always show the previous slide's image
        const updatePreview = () => {
            const activeIndex = mainCarousel._activeIndex;
            const items = mainEl.querySelectorAll('.carousel-item');
            const prevIndex = (activeIndex - 1 + items.length) % items.length;
            previewImg.src = items[prevIndex].querySelector('img').src;
        };

        mainEl.addEventListener('slid.bs.carousel', updatePreview);

        // Animation only on "next" (auto-cycle direction)
        mainEl.addEventListener('slide.bs.carousel', (event) => {
            if (event.direction !== 'left') return; // Only animate on next

            const activeItem = mainEl.querySelector('.carousel-item.active');
            const activeImg = activeItem.querySelector('img');
            const oldSrc = activeImg.src;

            // Set preview to the outgoing image early (but hidden)
            previewImg.src = oldSrc;
            previewImg.style.opacity = '0';

            // Clone the outgoing main image for animation
            const clone = activeImg.cloneNode(true);
            const rect = activeImg.getBoundingClientRect();
            const previewRect = previewImg.getBoundingClientRect();

            clone.style.position = 'fixed';
            clone.style.top = `${rect.top}px`;
            clone.style.left = `${rect.left}px`;
            clone.style.width = `${rect.width}px`;
            clone.style.height = `${rect.height}px`;
            clone.style.zIndex = '1050';
            clone.style.pointerEvents = 'none';
            clone.style.transition = 'all 0.6s ease-in-out';
            clone.style.transformOrigin = 'center center';

            document.body.appendChild(clone);

            // Force reflow
            clone.offsetHeight;

            // Calculate scale ratio and center deltas
            const ratio = previewRect.width / rect.width;
            const mainCenterX = rect.left + rect.width / 2;
            const mainCenterY = rect.top + rect.height / 2;
            const previewCenterX = previewRect.left + previewRect.width / 2;
            const previewCenterY = previewRect.top + previewRect.height / 2;
            const deltaX = previewCenterX - mainCenterX;
            const deltaY = previewCenterY - mainCenterY;

            // Apply final transform (move center + scale around center)
            clone.style.transform = `translate(${deltaX}px, ${deltaY}px) scale(${ratio})`;

            // On animation end: remove clone and reveal the real preview (same image = seamless)
            clone.addEventListener('transitionend', () => {
                clone.remove();
                previewImg.style.opacity = '1';
            });
        });
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