<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        // "Hobbies" page
        $data = [
            'title' => 'Hobbies',
            'content' => 'This is the Hobbies page.'
        ];

        return view('hobbies', $data);
    }
}
