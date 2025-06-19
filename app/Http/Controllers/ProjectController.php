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
        return view('project', ['projects' => $projects]);
    }

    public function about()
    {
        return view('about'); // view: resources/views/about.blade.php
    }

<<<<<<< HEAD
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
=======
            $path = $request->file('photo')->store('images','local');
            $validated['photo']='storage/' .$path;
        }
        Project::create($validated);
        return redirect('/');
     } 
     public function update(ProjectRequest $request)
    {  
        $validated = $request->validated();
        if($request->hasFile('photo')){
            $path =  $request->file('photo')->store('images','local');
            $validated['photo'] = 'storage/' . $path;
        }

        Project::where('id', $request['id'])->update($validated);

        return redirect('/');
    }

    public function updateView($id)
    {
        $pro = Project::where('id', $id)->get();
        return view('update', ['pro'=>$pro[0]]);
>>>>>>> 383444fe26dc9e82f15133ff393efbd152ef4118
    }
}
