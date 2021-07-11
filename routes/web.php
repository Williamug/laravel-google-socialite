<?php

use App\Http\Controllers\GoogleCotroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('auth/google', [GoogleCotroller::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleCotroller::class, 'handleGoogleCallback']);
