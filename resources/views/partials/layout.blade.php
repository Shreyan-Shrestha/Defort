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

    <footer class="mt-3 pb-3 text-white pt-4" style="background-color: #05285b;;">
        <div class="container">
            <div class="d-flex row flex-sm-row ms-2 justify-content-between">
                <div class="col-md-3 text-wrap font-monospace">
                    <img class="logo" src="{{ asset('images/logo.png') }}" style="height: 4.8rem; width:auto" alt="DE-FORT Logo">
                    <p>We are DE-FORT, a full service [Civil/Structural/General] engineering
                        and construction firm dedicated to shaping resilient infrastructure
                        and inspiring spaces.
                    </p>
                </div>
                <div class="col-md-2">
                    <h5>Quick Links:</h5>
                    <ul class="list-unstyled my-2">
                        <li class="my-1"><a href="#" class="text-white">Home</a></li>
                        <li class="my-1"><a href="#" class="text-white">About Us</a></li>
                        <li class="my-1"><a href="#" class="text-white">Services</a> </li>
                        <li class="my-1"><a href="#" class="text-white">Projects</a></li>
                        <li class="my-1"><a href="#" class="text-white">Blogs</a></li>
                        <li class="my-1"><a href="#" class="text-white">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h5>Services:</h5>
                    <ul class="list-unstyled">
                        <li class="my-1"><a href="#" class="text-white">Structurral Engineering & Design</a></li>
                        <li class="my-1"><a href="#" class="text-white">Civil & Site Development</a></li>
                        <li class="my-1"><a href="#" class="text-white">Construction Management</a></li>
                        <li class="my-1"><a href="#" class="text-white">MEP Engineering</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Contact:</h5>
                    <p><i class="bi bi-telephone-fill"></i> +9771-5444086</p>
                    <h6><i class="bi bi-envelope"></i> info@defort.com</h6>
                    <h6><i class="bi bi-geo-alt"></i> Jawalakhel, Lalitpur Metropolitan City, Nepal</h6>
                </div>
            </div>
            <p class="text-center mb-0">© 2026 DE-FORT. All rights reserved | Terms of Services | Privacy Policy</p>
        </div>
    </footer>

    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>