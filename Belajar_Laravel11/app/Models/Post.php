<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

     return $post;
    }
}
