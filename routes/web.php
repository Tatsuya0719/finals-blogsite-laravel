<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PostController; // We need to import this
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

// Guest routes (only accessible when not logged in)
Route::get('/', [LandingPageController::class, 'index'])->name('welcome');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// New routes for posts and comments
// A route to show a single post. We'll use a `slug` for clean URLs.
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');

// Authenticated routes (only accessible when logged in)
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('roles', RoleController::class);

    // Route to handle comment submission. It's inside the 'auth' group because only logged-in users can comment.
    Route::post('/posts/{post}/comments', [PostController::class, 'storeComment'])->name('comments.store');
});