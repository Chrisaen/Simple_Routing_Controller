<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $hobbiesContent = 'I love playing basketball and working out during my free time. I also play Esports like Dota 2 and Mobile Legends.';
        return view('hobbies', compact('hobbiesContent'));
    }
}
