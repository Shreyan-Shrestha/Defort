@extends('partials.layout')

@section('title', 'Home - DE-FORT Tech and Health')

@section('content')
<section class="container-fullwidth row justify-content-between w-100 m-0 mb-md-5 p-0 reveal">
    <div class="h-100 col-lg-8 col-8 mt-3 d-flex flex-shrink-1 reveal">
        <div class="h-100 pt-5 px-2 px-md-5 mt-5">
            <div class="section-subtitle mb-5" style="font-stretch: expanded;">
                <h1><span style="font-size: 3rem;">Technical Excellence in</span> <span style="color: #007bff; font-size:3rem;">Engineering </span>/<span style="color: #007bff; font-size:3rem;"> Architectural</span> / <span style="color: #007bff; font-size:3rem;"> Infastructural</span> <span style="font-size: 3.3rem;">and</span> <span style="color: #007bff; font-size:3rem;">Health</span> <span style="font-size: 3rem;">Projects</span></h1>
                <p class="lead text-wrap pe-3 mt-4" style="font-size: 1.5rem;">Delivering compliant, sustainable and technically sound designs, plannings<br> & Turnkey construction solutions | Advancing Health solutions.</p>
            </div>
            <div class="d-flex pe-2 my-5">
                <a href="/contact" class="btn btn-primary btn-lg me-3 px-4">Book a Consultation</a>
                <a href="/services" class="btn btn-outline-primary btn-lg px-4 ms-4">View all Services</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-4 mt-5 reveal">
        <div class="mt-5" style="height: 10.75rem;">
            <div class="image-wrapper h-100" style="aspect-ratio: 2402/2572 !important;">
                <img src="{{asset('images/homepage/hero.jpeg')}}" class="img-fluid" alt="DE-FORT" style="object-fit:contain; height:100%; width:100%; border-radius: 10%; border: 10px solid #bbd4ff;">
            </div>
        </div>
    </div>
</section>

<section class="container-fullwidth py-lg-5 mt-lg-5 px-md-5 px-3 reveal">
    <div class="w-100 mt-md-5 mt-4">
        <div class="row align-items-center justify-content-center">
            <!-- Diamond Image Column -->
            <div class="col-lg-4">
                <div class="outer-diamond m-3 bg-white p-3 rounded">
                    <div class="diamond-container mx-auto">
                        <div class="diamond-inner">
                            <img src="{{ asset('images/homepage/diamond.jpeg') }}"
                                class="img-fluid"
                                alt="Engineering and Health Services">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="ps-lg-4 p-3">

                    <div class="section-title d-flex align-items-center mb-4">
                        <span class="line-divider d-inline-block me-3"
                            style="background-color: #007bff; width:3.5rem; height:0.25rem;"></span>
                        <h2 class="mb-0 fw-bold">Who We Are</h2>
                    </div>

                    <p class="lead">
                        From our humble beginnings to a multidisciplinary future, we continue to design, develop, and
                        deliver with purpose. Rooted as the vision of Effort Nepal, our journey has evolved the company
                        through Development Effort and Defort Designers, progressively expanding our expertise and commitment
                        to excellence. Today, as Defort Tech and Health pvt. ltd., we bring together multidisciplinary capabilities
                        in engineering, architecture, urban planning, and health infrastructure to deliver innovative, sustainable, and
                        impactful solutions. Our evolution reflects a continued pursuit of knowledge, collaboration, and a better-built
                        future.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="container-fullwidth py-lg-5 px-md-5 px-4 mt-5 reveal">
    <div class="w-100">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 mb-5 mb-md-0 reveal">
                <div class="pe-md-4">
                    <div class="section-title d-flex align-items-center mb-4">
                        <span class="line-divider d-inline-block me-3" style="background-color: #007bff; width:3rem; height:0.2rem;"></span>
                        <h4><span class="fw-bold">Our Services</span></h4>
                    </div>
                    <h1 class="mb-4">
                        Expert <span style="color: #007bff;">Solutions</span> for Complex
                        <span style="color: #007bff;">Building</span> Challenges
                    </h1>
                    <p class="lead mb-5">
                        From structural design to turnkey construction partner with experts
                        who ensure quality at every phase.
                    </p>
                    <p class="lead mb-5">
                        Delivering precision engineering and construction management for commercial,
                        industrial, and infrastructure projects.
                    </p>

                    <a class="btn btn-outline-primary mt-2" href="/services">
                        Get Started <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-6 reveal">
                <div class="row g-4 h-100">
                    <div class="col-6">
                        <div class="card h-100 border-0 shadow-sm text-start" style="background-color: #f3f7fe;">
                            <div class="card-body d-flex flex-column justify-content-center p-3">
                                <div class="mb-3">
                                    <span class="p-3 bg-primary-subtle rounded d-inline-block">
                                        <i class="fa fa-drafting-compass fs-3 text-primary"></i>
                                    </span>
                                </div>
                                <h6 class="card-title fw-bold text-primary mb-2">Structural Engineering & Design</h6>
                                <p class="card-text small text-muted mb-0">Expert analysis and innovative structural solutions for buildings, bridges, and Weadvanced modeling.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card h-100 border-0 shadow-sm text-start" style="background-color: #f3f7fe;">
                            <div class="card-body d-flex flex-column justify-content-center p-3">
                                <div class="mb-3">
                                    <span class="p-3 bg-primary-subtle rounded d-inline-block">
                                        <i class="fa-solid fa-helmet-safety fs-3 text-primary"></i>
                                    </span>
                                </div>
                                <h6 class="card-title fw-bold text-primary mb-2">Civil & Site Development</h6>
                                <p class="card-text small text-muted mb-0">Comprehensive planning, grading, unity design, and infastructure for sites. We navigate your land for construction.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card h-100 border-0 shadow-sm text-start" style="background-color: #f3f7fe;">
                            <div class="card-body d-flex flex-column justify-content-center p-3">
                                <div class="mb-3">
                                    <span class="p-3 bg-primary-subtle rounded d-inline-block">
                                        <i class="fa fa-building text-primary fs-3"></i>
                                    </span>
                                </div>
                                <h6 class="card-title fw-bold text-primary mb-2">Construction Management</h6>
                                <p class="card-text small text-muted mb-0">Full-service project oversight, from pre-construction planning to final delivery. We manage schedule, budget, and build to specification.</p>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-6">
                        <div class="card h-100 border-0 shadow-sm text-start" style="background-color: #f3f7fe;">
                            <div class="card-body d-flex flex-column justify-content-center p-3">
                                <div class="mb-3">
                                    <span class="p-3 py-4 bg-primary-subtle rounded d-inline-block">
                                        <i class="fa fa-tools text-primary fs-3"></i>
                                    </span>
                                </div>
                                <h6 class="card-title fw-bold text-primary mb-2">MEP Engineering</h6>
                                <p class="card-text small text-muted mb-0">We deliver integrated MEP (Mechanical, Electrical, Plumbing) engineering solutions
                                    to ensure efficient, safe, reliable, and sustainable building systems. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid pt-5 p-5 mb-5 pb-2 my-3 reveal">
    <div class="column pt-5 align-items-center">
        <div class="section-title d-flex align-items-center justify-content-center mb-4">
            <span class="line-divider d-inline-block me-3" style="background-color: #007bff; width:3rem; height:0.2rem;"></span>
            <h4><span class="fw-bold"> Why Choose Us</span></h4>
        </div>
        <h1 class="mb-4 text-center">Beyond <span style="color: #007bff;"> Engineering</span> & Construction</h1>
    </div>
    <div class="container justify-content-center">
        <div class="row justify-content-evenly align-items-start border-0 text-start">
            <div class="col-12 col-md-3">
                <div class="card h-100 border-0 text-start">
                    <div class="card-body d-flex flex-column justify-content-center p-3">
                        <div class="mb-3">
                            <span class="p-3 bg-primary-subtle rounded d-inline-block">
                                <i class="fa-regular fa-handshake text-primary fs-3"></i>
                            </span>
                        </div>
                        <h5 class="card-title fw-bold text-primary mb-2">A Partnership Mindset, Not a Vendor Relationship</h5>
                        <p class="card-text small text-muted mb-0">We work alongside our clients as trusted partners, building lasting relationships through collaboration,
                            transparency, and shared commitment to every project's success.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3 mt-5">
                <div class="card h-100 border-0 text-start">
                    <div class="card-body d-flex flex-column justify-content-center p-3">
                        <div class="mb-3">
                            <span class="p-2 px-3 bg-primary-subtle rounded d-inline-block">
                                <i class="bi bi-chat-square-text text-primary fs-3"></i>
                            </span>
                        </div>
                        <h5 class="card-title fw-bold text-primary mb-2">Transparent Communication</h5>
                        <p class="card-text small text-muted mb-0">We encourage open communication and clear project coordination, helping clients understand key decisions, requirements, and progress throughout the project lifecycle. </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3 mt-5">
                <div class="card h-100 border-0 text-start">
                    <div class="card-body d-flex flex-column justify-content-center p-3">
                        <div class="mb-3">
                            <span class="p-2 px-3 bg-primary-subtle rounded d-inline-block">
                                <i class="fa fa-line-chart text-primary fs-3"></i>
                            </span>
                        </div>
                        <h5 class="card-title fw-bold text-primary mb-2">Purpose-Driven Impact</h5>
                        <p class="card-text small text-muted mb-0">We aim to contribute to meaningful development through infrastructure and built environments that respond to community needs and support lasting social value.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3">
                <div class="card h-100 border-0 text-start">
                    <div class="card-body d-flex flex-column justify-content-center p-3">
                        <div class="mb-3">
                            <span class="p-3 bg-primary-subtle rounded d-inline-block">
                                <i class="fa-solid fa-helmet-safety text-primary fs-3"></i>
                            </span>
                        </div>
                        <h5 class="card-title fw-bold text-primary mb-2">Unwavering Commitment to Safety, and Quality</h5>
                        <p class="card-text small text-muted mb-0">Integrated systems design for optimal building performance, energy efficiency,
                            and occupant comfort.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@if($posts->isNotEmpty())
<section class="container-fluid pt-5 px-5 pb-2 my-5 reveal">
    <div class="pt-5 mt-3">
        <div class="d-flex flex-column mb-4">
            <div class="section-title d-flex align-items-center">
                <span class="line-divider d-inline-block me-3" style="background-color: #007bff; width:3rem; height:0.2rem;"></span>
                <h4><span class="fw-bold"> Our Blogs & Articles</span></h4>
            </div>
            <div class="row">
                <div class="section-subtitle mt-2 col-lg-9 align-items-center d-flex justify-content-lg-start justify-content-center">
                    <h1>Latest <span style="color: #007bff;">updates</span>, built insights, and <span style="color: #007bff;">expert</span> news </h2>
                </div>
                <div class="container my-3 text-center col-lg-3 d-flex justify-content-lg-end justify-content-center align-items-center justify-content-sm-start">
                    <a href="{{ route('blog.index') }}" class="btn btn-outline-primary px-5 py-2 mx-3 border-3">
                        View All Blogs <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="d-md-flex flex-md-row mb-4 justify-content-start gap-4 row reveal">
            @foreach($posts as $post)
            <div class=" row col-lg-4 mb-sm-2 d-flex align-items-stretch mt-3">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden d-flex h-100 flex-column p-3">
                    <div class="position-relative">
                        @if($post->featured_image)
                        <img src="{{ asset('storage/' . $post->featured_image) }}" class="card-img-top" alt="{{ $post->title }}" style="height: 15.625rem; object-fit: cover;">
                        @else
                        <img src="https://placehold.co/400x250?text={{ $post->title }}" class="card-img-top" alt="{{ $post->title }}" style="height: 15.625rem; object-fit: cover;">
                        @endif

                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-light text-primary rounded-pill px-3 py-2">
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
@endif
@endsection