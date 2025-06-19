<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
    // Load public home page with portfolio entries
    public function index()
    {
        $todos = Portfolio::latest()->get();
        return view('home', compact('home'));
    }

    // Load project list for dashboard or admin view
    public function project()
    {
        $projects = Project::latest()->get();
        return view('project', compact('projects'));
    }

    public function about()
    {
        return view('about'); // view: resources/views/about.blade.php
    }

    // Dashboard about page (with edit functionality)
    public function dashboardAbout()
    {
        return view('admin.about'); // view: resources/views/admin/about.blade.php
    }

    // Admin dashboard
    public function dashboard()
    {
        return view('dashboard'); // view: resources/views/dashboard.blade.php
    }
     public function contact()
    {
        return view('contact'); // view: resources/views/about.blade.php
    }
}
