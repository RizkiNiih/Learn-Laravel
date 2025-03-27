<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class DashboardBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return view('dashboard.books.index',
         compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::get();
        
        return view('dashboard.books.create', [
            'categories' => Category::all()
        ], compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name'          => 'required|min:5|max:255',
        //     'description'   => 'required|max:255',
        //     'price'         => 'required|max:255',
        // ]);
        

        $book                    = new Book();
        
        $book->category_id       = $request->category_id;
        $book->title             = $request->title;
        $book->author            = $request->author;
        $book->price             = $request->price;
        $book->description       = $request->description;

        $book->save();

        return redirect('/dashboard/books')->with('success', 'New book has been added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::where('id', $id)->first();

        return view('dashboard.books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::where('id', $id)->first();
        
        return view('dashboard.books.edit', [
            'categories' => Category::all()
        ], compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book                    = Book::where('id', $id)->first();
        
        $book->category_id       = $request->category_id;
        $book->title             = $request->title;
        $book->author            = $request->author;
        $book->price             = $request->price;
        $book->description       = $request->description;
         
        $book->save();

        return redirect('/dashboard/books')->with('success', 'Book has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $book = Book::destroy($id);

        return redirect('/dashboard/books')->with('success', 'Book has been deleted!');
    }   
}
