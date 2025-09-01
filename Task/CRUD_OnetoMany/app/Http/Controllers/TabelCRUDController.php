<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TabelCRUDController extends Controller
{
    public function home()
    {
        $posts = Post::all(); // Ambil semua data berita
        return view('berita.home', compact('posts'));
    }

    public function create()
    {
        return view("berita.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required',
            'foto'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'penulis'    => 'required',
            'ringkasan'  => 'required',
            'content'    => 'required'
        ]);

        $data = new Post();
        $data->title = $request->title;

        // Upload foto
        if ($request->hasFile('foto')) { 
            $file = $request->file('foto');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('storage/foto'), $filename);
            $data->foto = $filename;
        }

        $data->penulis = $request->penulis;
        $data->ringkasan = $request->ringkasan;
        $data->content = $request->content;
        $data->save();

        $message = [
            "status" => "success",
            "message" => "Data created successfully"
        ];

        if ($request->has('save_and_add_other')) {
            return redirect()->route('berita.create')->with("message", $message);
        } else {
            return redirect()->route('berita.home')->with("message", $message);
        }
    }
}
