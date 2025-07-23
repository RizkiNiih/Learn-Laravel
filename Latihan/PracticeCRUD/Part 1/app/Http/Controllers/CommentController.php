<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'writter' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);
    
        $post->comments()->create([
            'writter' => $request->writter,
            'comment' => $request->comment,
        ]);
    
        return redirect()->route('posts.show', $post->id)->with('success', 'Komentar ditambahkan!');
    }

}
