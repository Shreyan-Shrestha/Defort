<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <title>@yield('title', 'DE-FORT Tech and Health')</title>

    <style>
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background-color: var(--bs-primary);
                padding: 1rem;
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
        }
    </style>
</head>

<body class="d-flex flex-column">
    <nav class="navbar justify-content-center bg-primary navbar-dark navbar-expand-lg px-4" style="height: 5rem;">
        <div class="container-fluid h-100">
            <div class="d-flex align-items-center p-0 m-0">
                <a class="navbar-brand" href="/">
                    <img class="logo" src="{{ asset('images/logo.png') }}" style="height: 4.8rem; width:auto" alt="DE-FORT Logo">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#projects" aria-controls="projects" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="projects">
                <ul class="navbar-nav ms-auto mb-lg-0 align-items-center text-white justify-content-evenly">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blogs</a>
                    </li>
                    <li class="nav-item pe-0">
                        <a class="nav-link pe-0" href="/contact"><button class="btn btn-light text-primary px-3">Contact Us</button></a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-message">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


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
    </script>

    <div class="container-fullwidth overflow-y-auto flex-grow-1 p-0 m-0">
        @yield('content')
    </div>

    <footer class="mt-3 pb-4 pt-5 px-3 text-white" style="background-color: #05285b;">
        <div class="container">
            <div class="row g-4 g-lg-5 justify-content-between">
                <div class="col-12 col-lg-4">
                    <img class="logo mb-3"
                        src="{{ asset('images/logo.png') }}"
                        style="height: 4.8rem; width: auto;"
                        alt="DE-FORT Logo">
                    <p class="mb-0" style="font-family: monospace; opacity: 0.9;">
                        We are DE-FORT, a full service [Civil/Structural/General] engineering
                        and construction firm dedicated to shaping resilient infrastructure
                        and inspiring spaces.
                    </p>
                </div>

                <div class="col-12 col-md-4">
                    <div class="row g-4 justify-content-between">
                        <div class="col-6 col-lg-4">
                            <h5 class="mb-3">Quick Links</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="#" class="text-white text-decoration-none">Home</a></li>
                                <li class="mb-2"><a href="#" class="text-white text-decoration-none">About Us</a></li>
                                <li class="mb-2"><a href="#" class="text-white text-decoration-none">Services</a></li>
                                <li class="mb-2"><a href="#" class="text-white text-decoration-none">Projects</a></li>
                                <li class="mb-2"><a href="#" class="text-white text-decoration-none">Blogs</a></li>
                                <li class="mb-2"><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-lg-8">
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
                    <h5 class="mb-3">Contact</h5>
                    <p class="mb-2"><i class="bi bi-telephone-fill me-2"></i>+9771-5444086</p>
                    <p class="mb-2"><i class="bi bi-envelope me-2"></i>info@defort.com</p>
                    <p class="mb-0">
                        <i class="bi bi-geo-alt me-2"></i>
                        Jawalakhel, Lalitpur Metropolitan City,Nepal
                    </p>
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

    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>