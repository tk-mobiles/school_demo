<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: #f4f6f9;
            min-height: 100vh;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(135deg, #4e73df, #224abe);
            padding: 12px 0;
        }

        .navbar-brand {
            color: white !important;
            font-size: 24px;
            font-weight: 700;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 600;
            margin-left: 10px;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #fff !important;
        }

        .dropdown-menu {
            border: none;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .dropdown-item:hover {
            background: #f4f6f9;
        }

        /* Main Content */
        main {
            min-height: calc(100vh - 80px);
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 15px;
            color: #777;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div id="app">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm"
            style="background: linear-gradient(135deg, #4e73df, #224abe);">

            <div class="container">

                <!-- Logo -->
                <a class="navbar-brand fw-bold" href="{{ url('/home') }}">
                    <i class="bi bi-mortarboard-fill"></i>
                    Student System
                </a>

                <!-- Mobile Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">

                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu -->
                <div class="collapse navbar-collapse" id="mainNavbar">

                    <!-- Left Menu -->
                    <ul class="navbar-nav me-auto">

                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/home') }}">
                                <i class="bi bi-speedometer2"></i>
                                Dashboard
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/students') }}">
                                <i class="bi bi-people-fill"></i>
                                Students
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-person-badge-fill"></i>
                                Teachers
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-book-fill"></i>
                                Courses
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-cash-stack"></i>
                                Payments
                            </a>
                        </li>

                    </ul>

                    <!-- Right Menu -->
                    <ul class="navbar-nav ms-auto align-items-center">

                        <!-- User Dropdown -->
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">

                                <i class="bi bi-person-circle"></i>
                                {{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end shadow border-0">

                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi bi-person"></i>
                                        Profile
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi bi-gear"></i>
                                        Settings
                                    </a>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">

                                        <i class="bi bi-box-arrow-right"></i>
                                        Logout
                                    </a>
                                </li>

                            </ul>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </li>

                    </ul>

                </div>

            </div>
        </nav>

        <!-- Page Content -->
        <main class="py-4">
            @yield('content')
        </main>

        <!-- Footer -->
        <div class="footer">
            © {{ date('Y') }} {{ config('app.name', 'Laravel') }}.
            All Rights Reserved.
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')

</body>

</html>