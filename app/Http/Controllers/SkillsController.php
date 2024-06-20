<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $skillsContent = 'This is the Skills page.';
        return view('skills', compact('skillsContent'));
    }
}
