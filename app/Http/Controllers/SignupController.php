<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SignupController extends Controller
{
  public function index()
  {
    return view('signup');
  }

  public function register(Request $req)
  {
    $fields = $req->validate(['username' => ["required", "min:5", "max:20", Rule::unique('users', 'username')], 'email' => ["required", "email", Rule::unique('users', 'email')], 'password' => ["required", "confirmed", "min:8", "max:20"]]);

    $fields["password"] = bcrypt($fields["password"]);

    User::create($fields);
    return redirect()->route('login');
  }
}
