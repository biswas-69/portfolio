<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactDashboardController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
        return view('contact.dashboard', compact('contacts'));
    }
}
