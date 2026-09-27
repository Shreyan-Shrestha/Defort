@extends('partials.layout')
@section('title', 'About Us - DE-FORT')
<style>
    #forborder {
        background-image: linear-gradient(#87b0db, #87b0db),
            linear-gradient(#87b0db, #87b0db),
            linear-gradient(#87b0db, #87b0db),
            linear-gradient(#87b0db, #87b0db),
            linear-gradient(steelblue, steelblue);
        background-repeat: no-repeat;
        background-size: 5px 50%, 50% 5px, 5px 50%, 50% 5px;
        background-position: left bottom, left bottom, right top, right top;
    }

    #principles {
        border: solid #87b0db;
    }
</style>

@section('content')
<div class="container-fullwidth pt-md-5 pb-0">
    <section class="w-100 column px-md-5 px-3 mt-5 pt-sm-3" id="pageintro">
        <div class="row d-flex justify-content-start reveal">
            <div class="col-8 col-sm-6">
                <div class="section-title d-flex align-items-center">
                    <span class="line-divider d-inline-block me-3" style="background-color: #007bff; width:2.5rem; height:0.2rem;"></span>
                    <h5><span class="fw-bold"> About Us</span></h5>
                </div>

                <p>
                <h1><span style="color: #007bff;">DE-FORT TECH and HEALTH</span></h1>
                </p>
            </div>
        </div>

        <div class="section-subtitle col-lg-6 col-sm-10 mt-3 reveal">
            <p class="lead">
                Delivering compliant, sustainable and technically sound designs, plannings & Turnkey construction solutions | Advancing Health solutions.
            </p>
        </div>
    </section>

    <section class="container-fullwidth mt-5 py-5 px-md-5 px-3 position-relative">
        <div class="row align-items-center g-5">
            <div class="col-12 col-lg-6 reveal">
                <div class="image-wrapper">
                    <img
                        class="img-fluid"
                        src="{{ asset('images/homepage/vision.png') }}"
                        alt="Sustainable engineering project"
                        style="aspect-ratio: 5/3; object-fit: contain; border: radius 10%;">
                </div>
            </div>

            <div class="col-12 col-lg-6 reveal ps-lg-5">
                <h1>
                    <span style="color: #007bff;">Vision</span>
                </h1>

                <p class="lead mt-4">
                    We are in the 4<sup>th</sup> decade of our journey, evolving since the 1992 through experience, innovation,
                    and a steadfast commitment to shaping better places, better infrastructure, and a better future.
                </p>
            </div>
        </div>
    </section>

    <section class="w-100 mt-5 px-md-5 px-3">
        <div class=" d-flex flex-column justify-content-center align-items-center reveal">
            <div class=" section-title d-flex flex-row align-items-center reveal">
                 <h1>
                    <span style="color: #007bff;">Mission</span>
                </h1>
            </div>
        </div>

        <div class="w-100 mt-5 d-flex flex-sm-row flex-wrap gap-4">
            <div class="card rounded h-100 flex-column border-0 p-3">
                <div class="row g-4 justify-content-center align-items-center h-100">
                    <div class="col-6 col-md-4 reveal">
                        <div class="card h-100 shadow-sm text-start" id="principles">
                            <div class="card-body d-flex flex-column justify-content-center p-4">
                                <div class="mb-3">
                                    <span class="p-3 bg-primary-subtle rounded d-inline-block">
                                        <i class="fa-solid fa-helmet-safety text-primary fs-3"></i>
                                    </span>
                                </div>

                                <h6 class="card-title fw-bold text-primary mb-2">Engineering Excellence</h6>
                                <p class="card-text small text-muted mb-0">To deliver innovative and technically sound engineering solutions that uphold the highest standards of quality, safety, and performance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 reveal">
                        <div class="card h-100 shadow-sm text-start" id="principles">
                            <div class="card-body d-flex flex-column justify-content-center p-4">
                                <div class="mb-3">
                                    <span class="p-3 bg-primary-subtle rounded d-inline-block">
                                        <i class="fa fa-cogs text-primary fs-3"></i>
                                    </span>
                                </div>

                                <h6 class="card-title fw-bold text-primary mb-2">Integrated Multidisciplinary Solutions</h6>
                                <p class="card-text small text-muted mb-0">To integrate engineering, architecture, urban planning, and health expertise to develop comprehensive solutions for complex project requirements.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 reveal">
                        <div class="card h-100 shadow-sm text-start" id="principles">
                            <div class="card-body d-flex flex-column justify-content-center p-4">
                                <div class="mb-3">
                                    <span class="p-3 bg-primary-subtle rounded d-inline-block">
                                        <i class="fa fa-recycle text-primary fs-3"></i>
                                    </span>
                                </div>

                                <h6 class="card-title fw-bold text-primary mb-2">Sustainable Development</h6>
                                <p class="card-text small text-muted mb-0">To promote environmentally responsible and sustainable practices that contribute to resilient communities and a better built environment.</p>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 reveal">
                        <div class="card h-100 shadow-sm text-start" id="principles">
                            <div class="card-body d-flex flex-column justify-content-center p-4">
                                <div class="mb-3">
                                    <span class="p-3 bg-primary-subtle rounded d-inline-block">
                                        <i class="fa fa-lightbulb text-primary fs-3"></i>
                                    </span>
                                </div>

                                <h6 class="card-title fw-bold text-primary mb-2">Architectural Innovation</h6>
                                <p class="card-text small text-muted mb-0">To create functional, aesthetically meaningful, and context-sensitive architectural designs that balance creativity, usability, and technical excellence.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 reveal">
                        <div class="card h-100 shadow-sm text-start" id="principles">
                            <div class="card-body d-flex flex-column justify-content-center p-4">
                                <div class="mb-3">
                                    <span class="p-3 bg-primary-subtle rounded d-inline-block">
                                        <i class="fa-regular fa-handshake text-primary fs-3"></i>
                                    </span>
                                </div>

                                <h6 class="card-title fw-bold text-primary mb-2">Client-Centered Delivery</h6>
                                <p class="card-text small text-muted mb-0">To understand our clients' goals and deliver tailored solutions that reflect their requirements, expectations, and project objectives.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 reveal">
                        <div class="card h-100 shadow-sm text-start" id="principles">
                            <div class="card-body d-flex flex-column justify-content-center p-4">
                                <div class="mb-3">
                                    <span class="p-3 bg-primary-subtle rounded d-inline-block">
                                        <i class="fa fa-users text-primary fs-3"></i>
                                    </span>
                                </div>

                                <h6 class="card-title fw-bold text-primary mb-2">Community Impact & Social Responsibility</h6>
                                <p class="card-text small text-muted mb-0">To contribute to the development of safer, more accessible, and sustainable communities through responsible infrastructure and built-environment projects.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($faqs->isNotEmpty())
    <section class="w-100 mt-4 pt-md-5 px-3">
        <div class="mt-5 d-flex flex-column justify-content-center align-items-center">
            <div class=" section-title d-flex flex-row align-items-center">
                <span class="line-divider d-inline-block me-3 align-self-center" style="background-color: #007bff; width:2.5rem; height:0.2rem;"></span>
                <h5><span class="fw-bold"> FAQs</span></h5>
            </div>

            <h2 class="mt-3">Frequently Asked <span style="color: #007bff;">Questions</span></h2>
        </div>

        <div class="justify-content-center align-items-center mt-4 d-flex">
            <div class="accordion col-12 p-0 p-md-5" id="faqs">
                @foreach ($faqs as $faq)
                <div class="accordion-item mt-3 reveal">
                    <h2 class="accordion-header" id="heading{{ $faq->id }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="false" aria-controls="collapse{{ $faq->id }}">
                            <strong>{{ $faq->question }}</strong>
                        </button>
                    </h2>

                    <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#faqs">
                        <div class="accordion-body">
                            {{ $faq->answer }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <section class="container-fullwidth mt-5 pt-5" id="footerCTA">
        <div class="p-5 text-start reveal row" style="background-color: #dce9ff;">
            <div class="col-12 col-lg-6">
                <h2 class="mb-3 text-primary">Need Specialized Expertise?</h2>
                <p class="mb-4">Our team of licensed professionals is ready to tackle your most complex engineering challenges.</p>
            </div>

            <div class="col-12 col-lg-6 d-flex align-items-center justify-content-lg-end">
                <button onclick="window.location.href='/contact'" class="btn btn-outline-primary px-5 py-2 border-3">Contact Us <i class="bi bi-arrow-right-short text-primary"></i></button>
            </div>
        </div>
    </section>
</div>
@endsection