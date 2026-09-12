<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/student.css') }}">
</head>

<body>

    <div id="editForm">
        <input type="hidden" id="edit_id" value="{{ $student->id }}">

        <div class="mb-3">
            <label>Name</label>
            <input type="text" id="edit_name" value="{{ $student->name }}">
        </div>

        <div class="mb-3">
            <label>Gender</label>
            <input type="text" id="edit_gender" value="{{ $student->gender }}">
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" id="edit_phone" value="{{ $student->phone }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" id="edit_email" value="{{ $student->email }}">
        </div>

        <div class="mb-3">
            <label>Address</label>
            <textarea id="edit_address">{{ $student->address }}</textarea>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('js/cud/student_cud.js') }}"></script>

</body>

</html>