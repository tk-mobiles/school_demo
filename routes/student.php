<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Students​ route
Route::resource('students', StudentController::class);
// Student API
Route::get('/api/students', [StudentController::class, 'index']);
Route::post('/api/students', [StudentController::class, 'store']);
Route::get('/api/students/{id}', [StudentController::class, 'show']);
Route::put('/api/students/{id}', [StudentController::class, 'update']);
Route::delete('/api/students/{id}', [StudentController::class, 'destroy']);