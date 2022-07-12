<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Mail\Reminder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

// create a controller
// command : php artisan make:controller PagesController


Route::get('/', [PagesController::class, 'index']);
Route::get('/reports', [PagesController::class, 'reports']);

Route::resource('posts', '\App\Http\Controllers\PostsController');


Auth::routes(['verify' => true]);

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware(['auth', 'verified']);

//Email
// Route::get('/email', function() {
//     Mail::to('andrei@gmail.com')->send(new Reminder());
//     return new Reminder();
// });