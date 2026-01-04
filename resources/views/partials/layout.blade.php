<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
    <title>@yield('title', 'DE-FORT Tech and Health')</title>

    <style>
        html,
        body {
            scrollbar-width: none;
        }

        ::-webkit-scrollbar {
            width: 0;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DE-FORT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#projects" aria-controls="projects" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="projects">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                setTimeout(() => {
                    successMessage.classList.remove('show');
                    successMessage.classList.add('fade');
                    // Optionally remove the element from DOM after fade-out
                    setTimeout(() => {
                        successMessage.remove();
                    }, 500); // Match Bootstrap's fade transition duration
                }, 2000); // 5-second delay
            }
        });
    </script>

    <div class="container-xxl">
        @yield('content')
    </div>

    <footer class="mt-auto bg-dark text-white pt-4">
        <div class="container">
            <div class="row ms-2">
                <div class="col-md-4">
                    <h5>Contact Us:</h5>
                    <h6>Phone no. +9771-5444086</h6>
                    <h6>Email: info@defort.com</h6>
                    <h6>Address: Jawalakhel, Lalitpur MC-03, Nepal</h6>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links:</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Home</a></li>
                        <li><a href="#" class="text-white">Projects</a></li>
                        <li><a href="#" class="text-white">Contact</a></li>
                        <li><a href="#" class="text-white">About Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us:</h5>
                    <a href="#" class="text-white me-2"><i class="fab fa-facebook">Facebook</i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-twitter">Twitter</i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram">Instagram</i></a>
                </div>
            </div>
            <hr class="bg-light">
            <p class="text-center mb-0">© 2025 DE-FORT. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>