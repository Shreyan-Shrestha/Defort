<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <title>@yield('title', 'DE-FORT | Admin Panel')</title>
    <style>
        html, body {
            scrollbar-width: none;
        }

        body {
            height: auto;
        }

        ::-webkit-scrollbar {
            width: 0;
        }

        .flex-container {
            min-height: 100vh;
            height: auto;
            display: flex;
            flex-direction: row;
        }

        .content-wrapper {
            flex-grow: 1;
            min-height: 100vh;
            overflow-x: auto;
        }

        .navbar {
            min-height: 100%;
        }

        @media (max-width: 991.98px) {
            .flex-container {
                flex-direction: column;
            }

            .navbar {
                width: 100% !important; /* Adjusted to full width for better mobile experience */
                height: auto !important; /* Height auto to adapt to content */
            }

            .content-wrapper {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="flex-container">
        <nav class="navbar navbar-expand-lg bg-primary d-flex flex-column" data-bs-theme="dark" style="width: 18%; color: white;">
            <div class="container-fluid flex-column sticky-top h-75 justify-content-start align-items-center">
                <div class="navbar-brand text-center mb-4">
                    <span class="fs-3 fw-bold">Admin Panel</span>
                </div>

                <button class="navbar-toggler mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse flex-column w-auto mt-3" id="adminNavbar">
                    <ul class="navbar-nav flex-column w-100">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin"><h4><i class="bi bi-speedometer2 me-2"></i>Dashboard</h4></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/adminabout"><h4><i class="bi bi-info-circle me-2"></i>About Us</h4></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/adminprojects"><h4><i class="bi bi-kanban me-2"></i>Projects</h4></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admincontact"><h4><i class="bi bi-envelope me-2"></i>Messages</h4></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/admin/posts"><h4><i class="bi bi-journal-text me-2"></i>Blog Posts</h4></a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="nav-link text-danger" href="/"><h4><i class="bi bi-box-arrow-right me-2"></i>Homepage</h4></a>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content-wrapper p-3">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-message">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @yield('content')
        </div>
    </div>

    <!-- Load Bootstrap JS only once -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                setTimeout(() => {
                    successMessage.classList.remove('show');
                    successMessage.classList.add('fade');
                    setTimeout(() => {
                        successMessage.remove();
                    }, 500); // Match Bootstrap's fade transition duration
                }, 2000); // 2-second delay autoclose
            }
        });
    </script>
</body>
</html>