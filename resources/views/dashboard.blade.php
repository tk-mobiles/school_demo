@extends('layouts.app')

@section('content')

<div class="container">

    <!-- Welcome -->
    <div class="welcome-box">
        <h2 class="fw-bold">
            Welcome, {{ Auth::user()->name }} 👋
        </h2>

        <p class="mb-0">
            Student Management Dashboard System
        </p>
    </div>

    <!-- Dashboard Cards -->
    <div class="row g-4">

        <!-- Students -->
        <div class="col-md-3">
            <div class="card dashboard-card p-4">

                <div class="card-icon bg-blue">
                    <i class="bi bi-people-fill"></i>
                </div>

                <h5 class="dashboard-title">
                    Total Students
                </h5>

                <p class="dashboard-number text-primary">
                     {{ $totalStudents }}
                </p>

            </div>
        </div>

        <!-- Teachers -->
        <div class="col-md-3">
            <div class="card dashboard-card p-4">

                <div class="card-icon bg-green">
                    <i class="bi bi-person-badge-fill"></i>
                </div>

                <h5 class="dashboard-title">
                    Teachers
                </h5>

                <p class="dashboard-number text-success">
                    25
                </p>

            </div>
        </div>

        <!-- Courses -->
        <div class="col-md-3">
            <div class="card dashboard-card p-4">

                <div class="card-icon bg-orange">
                    <i class="bi bi-book-fill"></i>
                </div>

                <h5 class="dashboard-title">
                    Courses
                </h5>

                <p class="dashboard-number text-warning">
                    18
                </p>

            </div>
        </div>

        <!-- Revenue -->
        <div class="col-md-3">
            <div class="card dashboard-card p-4">

                <div class="card-icon bg-red">
                    <i class="bi bi-cash-stack"></i>
                </div>

                <h5 class="dashboard-title">
                    Revenue
                </h5>

                <p class="dashboard-number text-danger">
                    $5,200
                </p>

            </div>
        </div>

    </div>

    <!-- Recent Activity -->
    <div class="card dashboard-card mt-5">
        <div class="card-header bg-white border-0 pt-4">
            <h4 class="fw-bold">
                Recent Activities
            </h4>
        </div>

        <div class="card-body">

            <table class="table align-middle">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Activity</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>New Student Registered</td>
                        <td>27 May 2026</td>
                        <td>
                            <span class="badge bg-success">
                                Completed
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Course Added</td>
                        <td>26 May 2026</td>
                        <td>
                            <span class="badge bg-primary">
                                Active
                            </span>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Teacher Updated Profile</td>
                        <td>25 May 2026</td>
                        <td>
                            <span class="badge bg-warning text-dark">
                                Pending
                            </span>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection