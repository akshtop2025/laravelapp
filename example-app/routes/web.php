<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Admin login route
Route::get('/admin/login', function () {
    return view('admin.login');
})->name('login');

// Authentication route for admin login
Route::post('/admin/login', [AuthenticatedSessionController::class, 'store'])->name('admin.login');

// Middleware for the admin dashboard and slider management
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // Admin slider routes
    Route::get('/admin/sliders', [SliderController::class, 'index'])->name('admin.sliders.index');
    Route::get('/admin/sliders/create', [SliderController::class, 'create'])->name('admin.sliders.create'); // Ensure this route exists
    Route::post('/admin/sliders', [SliderController::class, 'store'])->name('admin.sliders.store');
    Route::delete('/admin/sliders/{id}', [SliderController::class, 'destroy'])->name('admin.sliders.destroy');
});

// Client-side route for sliders
Route::get('/', [SliderController::class, 'clientIndex'])->name('slider.index');
