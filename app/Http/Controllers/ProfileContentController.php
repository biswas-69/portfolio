<?php

namespace App\Http\Controllers;

// use App\Models\Portfolio;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\Profile;


class ProfileContentController extends Controller
{
    public function index()
    {
        $profiles = Profile::latest()->paginate(10);
        return view('profile', ['profiles' => $profiles]);
    }

    public function about()
    {
        return view('about');
    }
    public function profiles()
    {
        $profiles = Profile::latest()->get();
        return view('profile', ['profiles' => $profiles]);
    }
     public function addprofile()
     {
        return view('addprofile');
     }
     public function store(ProfileRequest $request)
     {
        $validated =$request->validated();
        if($request->hasfile('photo')){

            $path = $request->file('photo')->store('images','local');
            $validated['photo']='storage/' .$path;
        }
        Profile::create($validated);
        return redirect('/');
     } 
     public function update(ProfileRequest $request)
    {  
        $validated = $request->validated();
        if($request->hasFile('photo')){
            $path =  $request->file('photo')->store('images','local');
            $validated['photo'] = 'storage/' . $path;
        }

        Profile::where('id', $request['id'])->update($validated);

        return redirect('/');
    }

    public function updateView($id)
    {
        $pro = Profile::where('id', $id)->get();
        return view('update', ['pro'=>$pro[0]]);
    }
}
