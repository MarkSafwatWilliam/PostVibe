<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SignUpController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return View('welcome');
});
Route::get('/posts', function () {
    return View('posts');
});
Route::get("/create-new", function () {
    return View('create-new');
});

// Signup routes
Route::get('/signup', [SignUpController::class, 'index']);
Route::post('/signup', [SignUpController::class, 'register']);

// Login routes
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

// signout route
Route::post('/signout', [LogoutController::class, 'logout']);

// Contact us

Route::get('/contact', function () {
    return view('contact');
});
