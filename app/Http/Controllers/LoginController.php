<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function index()
  {
    return view('login');
  }

  public function login(Request $req)
  {
    $fields = $req->validate(['email' => ["required", "email"], 'password' => ["required"]]);

    if (!Auth::attempt($fields)) {
      return back()->with('message', 'Invalid credentials');
    }
    $req->session()->regenerate();
    
    return redirect('/');
  }
}