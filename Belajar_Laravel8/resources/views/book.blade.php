@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <h1 class="mb-5">{{ $book->title }}</h1>

        <p>By. <a href="/books?author={{ $book->author }}" class="text-decoration-none">{{ $book->author }}</a> in <a href="/books?category={{ $book->category->slug }}" class="text-decoration-none">{{ $book->category->name }}</a></p>

        @if ($book->image)
        <div style="max-height: 350px; overflow:hidden">
            <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->category->name }}" class="img-fluid">
        </div>
        @else
            <img src="https://picsum.photos/id/80/1400/800" alt="{{ $book->category->name }}"  class="img-fluid">
        @endif
        
        
        <article class="my-3 fs-5">
            {!! $book->description !!}
        </article>
        
        <a href="/books" class="text-decoration-none">Back to Books</a>
        
    </div>
</div>

@endsection