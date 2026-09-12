@extends('layouts.app')

@section('content')

<div class="container">
    <button class="btn btn-primary mb-3" id="btnAdd">
        Add Teacher
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

            @foreach ($teachers as $teacher)

            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->gender }}</td>
                <td>{{ $teacher->phone }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->address }}</td>

                <td>

                    <button class="btn btn-warning btn-sm" onclick="openEdit({{ $teacher->id }})">
                        Edit
                    </button>

                    <button class="btn btn-danger btn-sm" onclick="removeTeacher({{ $teacher->id }})">
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

<script src="{{ asset('js/api/teacher_api.js') }}"></script>
<script src="{{ asset('js/cud/teacher_cud.js') }}"></script>

@endsection