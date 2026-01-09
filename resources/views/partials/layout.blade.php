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
            margin-left: 15px;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar justify-content-center bg-primary navbar-dark navbar-expand-lg px-4" style="height: 80px;">
        <div class="container-fluid h-100">
            <div class="col-lg-1 overflow-hidden h-100 d-flex align-items-center">
                <img class="p-1" src="{{ asset('images/logo.jpeg') }}" style="height: 100; width:150" alt="DE-FORT Logo">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#projects" aria-controls="projects" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse col-lg-10 justify-content-end navbar-collapse" id="projects">
                <ul class="navbar-nav ms-3 mb-lg-0 align-items-center text-white">
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

    <div class="container-fullwidth flex-grow-1">
        @yield('content')
    </div>

    <footer class="mt-3 bg-dark text-white pt-4">
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
                        <li><a href="/blog/admin/posts">Blog Admin</a></li>
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