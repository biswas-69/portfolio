<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\project;

class ProjectController extends Controller
{
    public function project()
    {
        $projects = Project::latest()->get();
        return view('project', compact('projects'));
    }
     public function add()
     {
        return view('add');
     }
     public function store(ProjectRequest $request)
     {
        $validated =$request->validated();
        if($request->hasfile('photo')){

            $path = $request->file('photo')->store('images','local');
            $validated['photo']='storage/' .$path;
        }
        Project::create($validated);
        return redirect('/');
     }
}
