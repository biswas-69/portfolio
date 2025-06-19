<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
class AboutController extends Controller
{
    
    public function index()
    {
        return view('about');
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg|max:2048'
            ]);

            $request->file('image')->storeAs('public', 'profile.jpg');
        }

        return redirect()->route('about');
    }
  
}
