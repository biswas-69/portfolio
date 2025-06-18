<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function uploadForm()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $file = $request->file('photo');
        $path = $file->store('photos', 'public');

        $photo = Photo::create([
            'name' => $file->getClientOriginalName(),
            'file_path' => $path,
        ]);

        // ✅ preview page मा redirect गर्नुहोस्
        return redirect()->route('photos.preview', $photo->id);
    }

    public function preview($id)
    {
        $photo = Photo::findOrFail($id);
        return view('preview', compact('photo'));
    }

    public function download($id)
    {
        $photo = Photo::findOrFail($id);
        return Storage::disk('public')->download($photo->file_path, $photo->name);
    }
}
