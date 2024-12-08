<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return '<div> <h1>Home page</h1> <a href="/about"> Go To About </a> </div>';
});
