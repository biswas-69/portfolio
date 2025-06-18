<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function registerView()
    {
        return view("register");
        
    }

    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();
        // dd($validated['name']);
        User::create($validated);
        return redirect("/login");
    }

    public function loginView()
    {
        return view("login");
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();

        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect("/");
        }

        return back()->withErrors([
            "email" => "Invalid Credentials."
        ]);
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->flush();

        return redirect("/login");
    }
}
