<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $aboutContent = 'Hi, I am Neil Christopher Bondad, from Ilocos Sur currently taking Bachelor in Science in Information Technology Major in Web Development.';
        return view('about', compact('aboutContent'));
    }
}
