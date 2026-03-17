<!DOCTYPE html>
<html lang="en">
@vite(['resources/css/app.scss', 'resources/js/app.js'])

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
    <title>@yield('title', 'DE-FORT | Admin Panel')</title>
    <style>
        html,
        body {
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
                width: 100% !important;
                height: auto !important;
            }

            .content-wrapper {
                width: 100%;
            }

            ul li a#logout-link {
              border: 1px solid #dc3545 !important;
            }
        }
    </style>
</head>

<body>
    <div class="flex-container">
        <nav class="navbar navbar-expand-lg bg-primary d-flex flex-column" data-bs-theme="dark" style="width: 14rem;">
            <div class="container-fluid flex-column sticky-top h-75 justify-content-start align-items-center">
                <div class="navbar-brand text-center mb-4">
                    <span class="fs-3 fw-bold">Admin Panel</span>
                </div>

                <button class="navbar-toggler mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar" aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse flex-column w-100 mt-3" id="adminNavbar">
                    <ul class="navbar-nav flex-column w-100">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.index') }}">
                                <h5><i class="bi bi-speedometer2 me-2"></i>Dashboard</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.faqs') }}">
                                <h5><i class="bi bi-info-circle me-2"></i>FAQs</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.services') }}">
                                <h5><i class="bi bi-gear me-2"></i>Services</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.projects') }}">
                                <h5><i class="bi bi-kanban me-2"></i>Projects</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.contacts') }}">
                                <h5><i class="bi bi-envelope me-2"></i>Messages</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog.admin.posts.index') }}">
                                <h5><i class="bi bi-journal-text me-2"></i>Blog Posts</h5>
                            </a>
                        </li>
                        <li class="nav-item dropdown mt-5">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <h5><i class="bi bi-person me-2"></i>Account</h5>
                            </a>
                            <ul class="dropdown-menu col-6 col-md-12 p-3" aria-labelledby="navbarDropdown">
                                <li>
                                    <button type="button" class="btn btn-outline-warning mb-2 w-100 px-2 py-2" data-bs-toggle="modal" data-bs-target="#changePasswordModal" data-bs-whatever="@mdo" onclick="event.preventDefault();">
                                        <p class="p-0 py-1 m-0"><i class="bi bi-key me-2"></i>Change Password</p>
                                    </button>
                                </li>
                                <li>
                                    <button class="btn btn-outline-danger px-2 w-100"  href="#" id="logout-link" style="border: 1px solid #dc3545;"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <h5 class="m-0 px-2 py-1" ><i class="bi bi-box-arrow-right me-2"></i>Logout</h5>
                                    </button>
                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content-wrapper p-3">
            <section class="container-fullwidth position-relative p-0 m-0" id="alerts">
                @if (session('success') || session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-message">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert" id="error-message">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </section>

            @yield('content')
        </div>
    </div>

    <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.password.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="current_password" class="form-label">Current Password</label>
                            <input type="password" class="form-control @error('current_password') is-invalid @enderror" id="current_password" name="current_password" required>
                            @error('current_password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="new_password" class="form-label">New Password</label>
                            <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" name="new_password" required minlength="8" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Password must be at least 8 characters long and include uppercase letters, lowercase letters, numbers, and special characters.">
                            @error('new_password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror" id="new_password_confirmation" name="new_password_confirmation" required>
                            @error('new_password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Password</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const successMessage = document.getElementById('success-message');
                if (successMessage) {
                    setTimeout(() => {
                        successMessage.classList.remove('show');
                        successMessage.classList.add('fade');
                        setTimeout(() => {
                            successMessage.remove();
                        }, 500);
                    }, 2000); // 2-second delay autoclose
                }
            });
        </script>
</body>

</html>