<!DOCTYPE html>
<html lang="en">
@vite(['resources/css/app.scss', 'resources/js/app.js'])
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>@yield('title', 'DE-FORT Tech and Health')</title>

    <style>
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background-color: var(--bs-primary);
            }

            .outer-diamond {
                float: right;
                height: 12rem !important;
                width: 12rem !important;
                position: absolute;
                right: 0%;
                bottom: 65%;
            }
            *{
                font-size: small !important;
            }

            h1,
            h1 span,
            h1 p,
            h1 p span {
                font-size: 1.75rem !important;
            }

            p span {
                font-size: medium !important;
            }
            p .keepsmall{
                font-size: small !important;
            }
        }


        @media(max-width:1300px) {
            .outer-diamond {
                height: 18rem;
                width: 18rem;
            }
        }

        html,
        body {
            scrollbar-width: none;
        }

        ::-webkit-scrollbar {
            width: 0;
        }

        a {
            text-decoration: none;
        }

        .nav-link {
            color: #fff;
            margin-left: 0.625rem;
        }

        .reveal {
            opacity: 0;
            transform: translateY(35px);
            transition: all 0.9s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body class="d-flex flex-column">
    <nav class="navbar justify-content-center bg-primary navbar-dark navbar-expand-lg" style="height: 5rem;">
        <div class="container-fluid w-100">
            <a class="navbar-brand p-0" href="/">
                <img class="logo" src="{{ asset('images/logo.png') }}" style="height: 4.5rem; width:auto" alt="DE-FORT Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#hamburg" aria-controls="hamburg" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="hamburg" style="z-index: 1; width:100vw;">
                <ul class="navbar-nav ms-auto mb-lg-0 align-items-center text-white justify-content-evenly">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">
                            <p>About</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">
                            <p>Services</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projects">
                            <p>Projects</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog.index') }}">
                            <p>Blogs</p>
                        </a>
                    </li>
                    <li class="nav-item pe-0">
                        <a class="nav-link pe-0" href="/contact"><button class="btn btn-light text-primary px-3">Contact Us</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="container-fullwidth position-relative" id="rotateddivs">
        <div style="position: absolute;  z-index: -2; position: absolute; transform: rotate(-45deg); z-index: -5; right:-2rem; top:-14.7rem;">
            <div class="rounded-2" style="background-color: #bbd4ff; height: 18rem; width:13rem; border-bottom: 0.5rem solid #fff;"></div>
            <div class="rounded-2" style="height: 30rem; width:13rem; border: 0.5rem solid #bbd4ff"></div>
        </div>
    </section>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-message">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="container-full overflow-y-auto flex-grow-1 p-0 m-0">
        @yield('content')
    </div>

    <section class="container-fullwidth" id="footerCTA">
            <div class="p-5 text-start reveal row" style="background-color: #bbd4ff;">
                <div class="col-12 col-lg-6">
                <h2 class="mb-3 text-primary">Need Specialized Expertise?</h2>
                <p class="mb-4 lead">Our team of licensed professionals is ready to tackle your most complex engineering challenges.</p>
                </div>
                <div class="col-12 col-lg-6 d-flex align-items-center justify-content-lg-end">
                <button onclick="window.location.href='/contact'" class="btn btn-outline-primary px-5 py-2">Contact Us<i class="bi bi-arrow-right-short text-primary"></i></button>
                </div>
            </div>
    </section>
    <footer id="footer" class="container-fullwidth mt-3 mb-0 pb-4 pt-5 px-3 text-white reveal" style="background-color: #05285b;">
        <div class="container">
            <div class="row g-4 g-lg-5 justify-content-between">
                <div class="col-12 col-lg-4">
                    <img class="logo mb-3"
                        src="{{ asset('images/logo.png') }}"
                        style="height: 4.8rem; width: auto;"
                        alt="DE-FORT Logo">
                    <p class="mb-1" style="font-family: monospace; opacity: 0.9;">
                        We are DE-FORT, a full service [Civil/Structural/General] engineering
                        and construction firm dedicated to shaping resilient infrastructure
                        and inspiring spaces.
                    </p>
                    <i class="bi bi-facebook me-3 mt-4" style="font-size: 1.5rem;"></i>
                    <i class="bi bi-instagram me-3 mt-4" style="font-size: 1.5rem;"></i>
                    <i class="bi bi-linkedin me-3 mt-4" style="font-size: 1.5rem;"></i>
                </div>

                <div class="col-12 col-md-5">
                    <div class="row g-4 justify-content-between">
                        <div class="col-6 col-lg-5">
                            <h5 class="mb-3">Quick Links</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="/" class="text-white text-decoration-none">Home</a></li>
                                <li class="mb-2 "><a href="/about" class="text-white text-decoration-none">About Us</a></li>
                                <li class="mb-2 "><a href="/services" class="text-white text-decoration-none">Services</a></li>
                                <li class="mb-2 "><a href="/projects" class="text-white text-decoration-none">Projects</a></li>
                                <li class="mb-2 "><a href="/blogs" class="text-white text-decoration-none">Blogs</a></li>
                                <li class="mb-2 "><a href="/contact" class="text-white text-decoration-none">Contact Us</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-lg-7">
                            <h5 class="mb-3">Services</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="#" class="text-white text-decoration-none">Structural Engineering & Design</a></li>
                                <li class="mb-2"><a href="#" class="text-white text-decoration-none">Civil & Site Development</a></li>
                                <li class="mb-2"><a href="#" class="text-white text-decoration-none">Construction Management</a></li>
                                <li class="mb-2"><a href="#" class="text-white text-decoration-none">MEP Engineering</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <h5 class="mb-3">Contact Us:</h5>
                    <p class="mb-2"><i class="bi bi-telephone-fill me-2"></i>+9771-5444086</p>
                    <p class="mb-2"><i class="bi bi-envelope me-2"></i>info@defort.com</p>
                    <p class="mb-0"><i class="bi bi-geo-alt me-2"></i>Jawalakhel, Lalitpur Metropolitan City, Nepal</p>
                </div>

            </div>

            <div class="text-center mt-5 pt-4 border-top border-white border-opacity-25">
                <small>© 2026 DE-FORT. All rights reserved |
                    <a href="#" class="text-white text-decoration-none">Terms of Services</a> |
                    <a href="#" class="text-white text-decoration-none">Privacy Policy</a>
                </small>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                setTimeout(() => {
                    successMessage.classList.remove('show');
                    successMessage.classList.add('fade');
                    // Remove the element from DOM after fade-out
                    setTimeout(() => {
                        successMessage.remove();
                    }, 500);
                }, 2000);
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            const reveals = document.querySelectorAll('.reveal');

            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.12 // start animation when ~12% of element is visible
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        //stop observing after animation plays once
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            reveals.forEach(el => observer.observe(el));
        });
    </script>
</body>

</html>