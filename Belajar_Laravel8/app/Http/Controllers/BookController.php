<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
        public function index(Request $request)
        {
            $books = Book::query();

            if ($request->has('category_id')) {
                $books->where('category_id', $request->category->name);
            }

            if ($request->has('author')) {
                $books->where('author', $request->author);
            }

            if ($request->has('price')) {
                $books->where('price', $request->price);
            }

            return view('books', [
                "title" => "All Books",
                "active" => "books",
                "books" => $books->get()
            ]);
        }

        public function show(Book $book)
        {
        return view('book', [
            "title" => "Single Book",
            "active" => "books",
            "book" => $book
        ]);
        }

}
