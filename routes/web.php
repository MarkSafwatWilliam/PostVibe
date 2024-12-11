<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return View('welcome');
});

Route::get('/signup', function () {
  return View('signup');
});