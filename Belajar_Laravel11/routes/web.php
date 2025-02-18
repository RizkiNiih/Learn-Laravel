<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Alfa Rizki', 'title' => 'About']);
});


Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Alfa Rizki',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt unde eum repellat, quis quasi porro voluptas ratione nisi optio, velit quam. Incidunt quaerat, quam dicta corrupti ducimus aliquid saepe quisquam.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Alfa Rizki',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima modi exercitationem officiis iste error, vitae illum, neque delectus esse id quo repellendus ipsum ratione itaque iure aliquam aut reiciendis excepturi?'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Alfa Rizki',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt unde eum repellat, quis quasi porro voluptas ratione nisi optio, velit quam. Incidunt quaerat, quam dicta corrupti ducimus aliquid saepe quisquam.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Alfa Rizki',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima modi exercitationem officiis iste error, vitae illum, neque delectus esse id quo repellendus ipsum ratione itaque iure aliquam aut reiciendis excepturi?'
        ]
     ];

        $post = Arr::first($posts, function($post) use ($slug) {
            return $post['slug'] == $slug;
        });

        return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
