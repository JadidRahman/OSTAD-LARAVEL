<?php

use Illuminate\Support\Facades\Route;

// Home Page Route
Route::get('/', function () {
    return view('home');
})->name('home');

// About Page Route
Route::get('/about', function () {
    return view('about');
})->name('about');

// Projects Page Route
Route::get('/projects', function () {
    return view('projects');
})->name('projects');

// Contact Page Route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Additional routes can be added here as needed


