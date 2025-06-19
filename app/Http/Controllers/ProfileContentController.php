<?php

namespace App\Http\Controllers;

use App\Models\ProfileContent;
use Illuminate\Http\Request;

class ProfileContentController extends Controller
{
    // Home page देखाउने function
    public function home()
    {
        // DB बाट पहिलो row लिनुहोस्, नत्र खाली Model बनाउनुहोस्
        $profile = ProfileContent::first() ?? new ProfileContent();

        return view('home', compact('profile'));
    }

    // Form बाट आएको data save गर्ने function
    public function update(Request $request)
    {
        // Validation गर्नुहोस् (यहाँ max length हटाउन सक्नुहुन्छ यदि unlimited चाहनुहुन्छ भने)
        $request->validate([
            'field_one' => 'required|string',
            'field_two' => 'nullable|string',
            'photo' => 'nullable|image|max:2048',
        ]);

        // DB बाट profile लिने (पहिलो row) अथवा नयाँ बनाउने
        $profile = ProfileContent::first() ?? new ProfileContent();

        // Text fields update गर्नुहोस्
        $profile->field_one = $request->input('field_one');
        $profile->field_two = $request->input('field_two');

        // फोटो upload भएमा store गर्नुहोस् र path save गर्नुहोस्
        if ($request->hasFile('photo')) {
            // पुरानो फोटो delete गर्नु optional छ
            // Storage::disk('public')->delete($profile->photo_path);

            $profile->photo_path = $request->file('photo')->store('profile_photos', 'public');
        }

        // Save DB मा गर्नुहोस्
        $profile->save();

        // Redirect गर्दा success message सहित home मा जानुहोस्
        return redirect()->route('home')->with('success', 'Profile updated!');
    }
}
