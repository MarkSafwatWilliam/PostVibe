<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\LoginController;



Route::get('/', function () {
  return View('welcome');
});

// Signup routes
Route::get('/signup', [SignUpController::class, 'index']);
Route::post('/signup', [SignUpController::class, 'register']);

// Login routes
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);