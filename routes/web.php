<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;



Route::get('/', function () {
  return View('welcome');
});

Route::get('/signup', [SignUpController::class, 'index']);