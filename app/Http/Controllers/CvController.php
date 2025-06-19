<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    
    public function index()
    {
        
        $files = Storage::files('public/cv');

        
        $cv = array_map(function ($file) {
            return ['photo' => Storage::url($file)];
        }, $files);

        return view('cv', compact('cv'));
    }

   
    public function uploadForm()
    {
        return view('uploadcv');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'cv_file' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $file = $request->file('cv_file');

        $path = $file->store('local/cv');

        return redirect('/cv')->with('success', 'CV uploaded successfully!');
    }
}
