<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index()
   {
    $name = "mahabharat";
    return view('index',compact('name'));
   }
}
