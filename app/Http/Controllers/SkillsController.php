<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        // "Skills" page
        $data = [
            'title' => 'Skills',
            'content' => 'This is the Skills page.'
        ];

        return view('skills', $data);
    }
}
