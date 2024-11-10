<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/student/dashboard', function () {
    return view('student.dashboard');  // Create a student dashboard view for this route
})->middleware('auth')->name('student.dashboard');

