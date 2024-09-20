<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->group(function () {
    // Dashboard route
    Route::get('/home', function () {
        return view('dashboard');
    })->name('dashboard');

    // Add other protected routes here
});
