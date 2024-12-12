<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function index()
  {
    if (Auth::check()) {
      return redirect('/');
    }
    return view('login');
  }

  public function login(Request $req)
  {
    $fields = $req->validate(['email' => ["required", "email"], 'password' => ["required"]]);

    if (!Auth::attempt($fields)) {
      return back()->with('ErrMessage', 'Invalid credentials');
    }
    $req->session()->regenerate();
    
    return redirect('/');
  }
}
