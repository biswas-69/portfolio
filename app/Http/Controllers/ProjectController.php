<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\project;


class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('project', ['projects' => $projects]);
    }

    public function about()
    {
        return view('about');
    }
    public function project()
    {
        $projects = Project::latest()->get();
        return view('project', ['projects' => $projects]);
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
    }
}
