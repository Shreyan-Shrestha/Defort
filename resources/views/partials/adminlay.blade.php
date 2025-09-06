<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>@yield('title', 'DE-FORT | Admin Panel')</title>
    <style>
    
    html, body {
            scrollbar-width: none;
        }
        body{
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
             border: 2px solid blue;
        }
        /* Content wrapper grows with content */
        .content-wrapper {
            flex-grow: 1;
            min-height: 100vh;
            overflow-x: auto;
            border: 2px solid red;
        }
        /* Navbar stretches to full container height */
        .navbar {
            min-height: 100%;
        }
        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .flex-container {
                flex-direction: column;
            }
            .navbar {
                width: 100% !important;
                height: 160vh !important;
            }
            .content-wrapper {
                width: 100%;
            }
        }
    </style>

</head>

<body>
    <div class="d-flex flex-row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark flex-column" style="width: 20%;">
            <div class="container-fluid flex-column sticky-top">
                <div class="navbar-brand text-center mb-4">
                    <span class="fs-4 fw-bold">Admin Panel</span>
                </div>

                <button class="navbar-toggler mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Links -->
                <div class="collapse navbar-collapse flex-column" id="adminNavbar">
                    <ul class="navbar-nav flex-column w-100">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/adminabout"><i class="bi bi-info-circle me-2"></i>About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/adminprojects"><i class="bi bi-kanban me-2"></i>Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admincontact"><i class="bi bi-envelope me-2"></i>Messages</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Main Content -->
        <div class="flex-grow-1 content-wrapper p-3">
            @yield('content')
        </div>
    </div>
</body>

</html>