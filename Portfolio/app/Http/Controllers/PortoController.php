<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortoController extends Controller
{
    public function about()
    {
        $portfolio = [
            'description' => 'I am a student who is learning programming, delving into logic, algorithms, and application development. Despite the challenges, I am still excited to continue honing my skills and becoming a reliable programmer.',
            'image' => '/img/Alfa.jpg'
        ];
        return view('page', compact('portfolio'));
    }
}