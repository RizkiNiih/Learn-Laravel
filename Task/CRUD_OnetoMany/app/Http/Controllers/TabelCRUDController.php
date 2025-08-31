<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TabelCRUDController extends Controller
{
    public function home()
    {
        $postingan = Post::with('commment')->get();
        return view('berita.home', compact('postingan'));
    }

    public function Untukanda()
    {
        $postingan = Post::with('commment')->get();
        return view('berita.Untukanda', compact('postingan'));
    }

    public function create()
    {
        return view("berita.create");
    }
}
