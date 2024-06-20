<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        // "About Me"
        $data = [
            'title' => 'About Me',
            'content' => 'This is the About Me page.'
        ];

        return view('about', $data);
    }
}
