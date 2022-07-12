<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;

// create a controller
// command : php artisan make:controller PagesController


Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

Route::resource('posts', '\App\Http\Controllers\PostsController');


Auth::routes(['verify' => true]);

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware(['auth', 'verified']);
