<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // =====================
    // STUDENT LIST PAGE
    // =====================
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    public function apiIndex()
    {
        return response()->json(Student::all());
    }

    // =====================
    // CREATE FORM
    // =====================
    public function create()
    {
        return view('students.create');
    }

    // =====================
    // EDIT FORM
    // =====================
    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('students.edit', compact('student'));
    }

    // =====================
    // STORE
    // =====================
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'gender' => 'required|string|max:10',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:students,email',
            'address' => 'required|string|max:255',
        ]);

        $student = Student::create($validated);

        return response()->json([
            'message' => 'Created successfully',
            'data' => $student,
        ]);
    }

    // =====================
    // UPDATE
    // =====================
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'gender' => 'required|string|max:10',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:students,email,'.$id,
            'address' => 'required|string|max:255',
        ]);

        $student->update($validated);

        return response()->json([
            'message' => 'Updated successfully',
            'data' => $student,
        ]);
    }

    // =====================
    // DELETE
    // =====================
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        $student->delete();

        return response()->json([
            'message' => 'Deleted successfully',
        ]);
    }

    // =====================
    // SHOW
    // =====================
    public function show($id)
    {
        return response()->json(
            Student::findOrFail($id)
        );
    }
}
