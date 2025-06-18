<?php
namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;

class CvController extends Controller
{
    public function create()
    {
        return view('cv');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
                'name' => $request->name,     
            
            'photo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }

        // Convert arrays to JSON
        
        
        $cv = Cv::create($data);

        return redirect()->route('cv.preview', $cv->id);
    }

    public function preview($id)
    {
        $cv = Cv::findOrFail($id);
        return view('cv-preview', compact('cv'));
    }

    public function download($id)
    {
         $cv = Cv::findOrFail($id);

    $pdf = Pdf::loadView('cv-pdf', compact('cv'));

    return $pdf->download('cv_' . $cv->name . '.pdf');
    }
}

