<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
     public function showLoginForm()
    {
        return view('login'); 
    }
     public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard'); // After login success
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }
    
    public function logout()
    {
        Auth::logout();
        request()->session()->flush();

        return redirect("/login");
    }
}
