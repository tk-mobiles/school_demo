<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">

        <a href="{{ url('/home') }}" class="sidebar-brand">
            <i class="bi bi-mortarboard-fill"></i>
            School System
        </a>

        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="bi bi-speedometer2"></i>
                    Dashboard
                </a>
            </li>

            <li>
                <a href="{{ route('students.index') }}"
                    class="{{ request()->routeIs('students.index') ? 'active' : '' }}">
                    <i class="bi bi-people-fill"></i>
                    Enrollment
                </a>
            </li>
            <li>
                <a href="{{ route('students.index') }}"
                    class="{{ request()->routeIs('students.index') ? 'active' : '' }}">
                    <i class="bi bi-people-fill"></i>
                    Students
                </a>
            </li>

            <li>
                <a href="{{ route('teachers.index') }}" class="{{ request()->routeIs('teachers.*') ? 'active' : '' }}">
                    <i class="bi bi-person-badge-fill"></i>
                    Teachers
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bi bi-book-fill"></i>
                    Class
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-book-fill"></i>
                    Room
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-book-fill"></i>
                    Shift
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-cash-stack"></i>
                    Payments
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bi bi-graph-up-arrow"></i>
                    Reports
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bi bi-gear-fill"></i>
                    Settings
                </a>
            </li>
        </ul>

    </div>

    <!-- Main Content -->
    <div class="main-content">

        <div class="profile-bar">
            <div>
                <h5 class="mb-0">
                    {{ Route::currentRouteName() === 'dashboard' ? 'Dashboard' : 'School System' }}
                </h5>
            </div>
            @auth
            <div class="dropdown">
                <button class="profile-button dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <span class="profile-icon">
                        <i class="bi bi-person-fill"></i>
                    </span>
                    <span>{{ auth()->user()->name }}</span>
                </button>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <span class="dropdown-item-text">
                            <strong>{{ auth()->user()->name }}</strong><br>
                            <small>{{ auth()->user()->email }}</small>
                        </span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
            @endauth
        </div>

        <div class="content-area">
            @yield('content')
        </div>

        <div class="footer">
            © {{ date('Y') }} {{ config('app.name', 'Laravel') }}
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')

</body>

</html>