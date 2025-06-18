<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact'); 
    }

    public function submit(Request $request)
{
    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ]);

    Contact::create($validated);

    return redirect('/contact')->with('success', 'Message sent successfully!');
}
}
