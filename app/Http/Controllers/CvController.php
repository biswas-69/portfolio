<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cv;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    // Show list of CVs (paginated)
    public function index()
    {
        $cvs = Cv::latest()->paginate(5);
        return view('cv', ['cv' => $cvs, 'cvs' => $cvs]);
    }

    // Show upload form
    public function create()
    {
        return view('uploadcv');
    }

    // Store uploaded CV
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cv_file' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('cv_file')) {
            $path = $request->file('cv_file')->store('cvs', 'public');
            Cv::create(['photo' => $path]);
        }

        return redirect('/cv');
    }

    // Soft delete CV
    public function destroy($id)
    {
        $cv = Cv::findOrFail($id);
        $cv->delete();

        return redirect('/cv');
    }

    
}
