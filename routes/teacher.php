<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

// Teachers route
Route::resource('teachers', TeacherController::class);
// Teacher API
Route::get('/api/teachers', [TeacherController::class, 'index']);
Route::post('/api/teachers', [TeacherController::class, 'store']);
Route::get('/api/teachers/{id}', [TeacherController::class, 'show']);
Route::put('/api/teachers/{id}', [TeacherController::class, 'update']);
Route::delete('/api/teachers/{id}', [TeacherController::class, 'destroy']);
