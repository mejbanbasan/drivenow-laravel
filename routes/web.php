<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/fleet', [PageController::class, 'index'])->name('cars.index');
Route::get('/cars/{id}', [PageController::class, 'show'])->name('cars.show');
Route::get('/booking/confirmation', [PageController::class, 'confirmation'])->name('booking.confirmation');
Route::get('/booking/{id}', [PageController::class, 'book'])->name('booking.create');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::get('/how-it-works', [PageController::class, 'howItWorks'])->name('how-it-works');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/booking/invoice/{id}', [PageController::class, 'invoice'])->name('booking.invoice');
