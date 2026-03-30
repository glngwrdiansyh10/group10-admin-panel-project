<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes — Group10 Admin Panel
|--------------------------------------------------------------------------
*/

// Redirect root ke dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

// Users (placeholder — akan diisi Anggota 2)
Route::get('/users', function () {
    return view('pages.users');
})->name('users');

// Settings (placeholder — akan diisi nanti)
Route::get('/settings', function () {
    return view('pages.settings');
})->name('settings');
