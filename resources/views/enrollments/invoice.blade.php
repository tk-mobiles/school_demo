@extends('layouts.app')

@section('content')

<div class="container">

    <h2 class="mb-3">Student Management</h2>

    <button class="btn btn-primary mb-3" id="btnAdd">
        Add Student
    </button>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody id="data">

            @foreach ($students as $student)

            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->address }}</td>

                <td>

                    <button class="btn btn-warning btn-sm" onclick="openEdit({{ $student->id }})">
                        Edit
                    </button>

                    <button class="btn btn-danger btn-sm" onclick="removeStudent({{ $student->id }})">
                        Delete
                    </button>

                </td>
            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection


@section('scripts')

<meta name="csrf-token" content="{{ csrf_token() }}">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="{{ asset('js/student/service.js') }}"></script>
<script src="{{ asset('js/student/student.js') }}"></script>

@endsection