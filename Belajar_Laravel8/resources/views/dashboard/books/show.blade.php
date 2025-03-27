@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-5">{{ $book->title }}</h1>

            <a href="/dashboard/books" class="btn btn-success"><i class="bi bi-arrow-left-short"></i> Back to all my book</a>
            <a href="/dashboard/books/{{ $book->id }}/edit" class="btn btn-warning"><i class="bi bi-scissors"></i> Edit</a>
            <form action="/dashboard/books/{{ $book->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><i class="bi bi-x-circle mt-1 text-white"></i> Delete</button>
              </form>

              <h3 class="mb-4">{{ $book->author }}</h3>
              <h3 class="mb-4">${{ $book->price }}</h3>
              <h3 class="my-4">{{ $book->description }}</h3>
              
              <a href="/books" class="text-decoration-none">Back to Books</a>

        </div>
    </div>
</div>
@endsection