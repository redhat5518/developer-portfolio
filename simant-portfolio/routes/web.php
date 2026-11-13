<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/about', 'pages.about')->name('about');
Route::view('/projects', 'pages.projects')->name('projects');
Route::view('/contact', 'pages.contact')->name('contact');
