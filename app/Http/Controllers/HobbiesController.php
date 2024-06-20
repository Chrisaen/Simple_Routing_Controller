<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $hobbiesContent = 'This is the Hobbies page.';
        return view('hobbies', compact('hobbiesContent'));
    }
}
