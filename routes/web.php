<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\StudentAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login']);
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

// Student routes
Route::prefix('student')->group(function () {
    Route::get('login', [StudentAuthController::class, 'showLoginForm'])->name('student.login');
    Route::post('login', [StudentAuthController::class, 'login']);
    Route::post('logout', [StudentAuthController::class, 'logout'])->name('student.logout');
    Route::get('dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
});
