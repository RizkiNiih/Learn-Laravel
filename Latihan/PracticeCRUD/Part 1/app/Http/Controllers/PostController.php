<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::all();

        return view('Posts.index', compact('posts'));
    }

    public function create()
    {
        return view('Posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title',
        ]);
        $post               = new Post();
        $post->title         = $request->title;
        $post->content        = $request->content;
        if ($request->hasFile('content')) {
            $file = $request->file('content');
            $namaFile = time() . '_' . $file->getClientOriginalName();
        
            // Store the file in the 'public/uploads/foto' directory
            $path = $file->move(public_path('storage/'), $namaFile);
        
            // Save the relative path to the database
            $post->content =  $namaFile;
        }
        // dd($products);
        $post->save();

        if ($request) {
            return redirect()->route('posts.create');
        } else {
            return redirect()->route('posts.index');
        }
    }

    public function show($id)
    {
        $posts = Post::findOrFail($id);

        return view('Posts.show', compact('posts'));
    }

    public function edit($id)
    {
        $posts = Post::where('id', $id)->first();

        return view('Posts.edit', compact('posts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title',
        ]);
        $post                = Post::where('id', $id)->first();
        $post->title         = $request->title;
        $post->content       = $request->content;
        if ($request->hasFile('content')) {
            $file = $request->file('content');
            $namaFile = time() . '_' . $file->getClientOriginalName();
        
            // Store the file in the 'public/uploads/foto' directory
            $path = $file->move(public_path('storage/'), $namaFile);
        
            // Save the relative path to the database
            $post->content =  $namaFile;
        }
        // dd($products);
        $post->update();

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $post = Post::where('id', $id)->delete();

        return redirect()->route('posts.index', compact('post')); 
    }
}
