<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $skillsContent = 'HTML, C#, JavaScript.';
        return view('skills', compact('skillsContent'));
    }
}
