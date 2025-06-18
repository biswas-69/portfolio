<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

class ProjectController extends Controller
{
    public function index()
    {
        $todos = Portfolio::latest()->get();
        return view('home', compact('home')); 
    }

    public function about()
    {
        return view('about');
    }
}
