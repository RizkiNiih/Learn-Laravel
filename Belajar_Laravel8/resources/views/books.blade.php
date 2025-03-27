@extends('layouts.main')

@section('container')
<div class="container text-center">
    <h1 style="padding-top: 3.5rem">{{ $title }}</h1>
</div>

@if ($books->count())
    @if ($books[0]->image)
        <div style="max-height: 400px; overflow:hidden">
            <img src="{{ asset('storage/' . $books[0]->image) }}" alt="{{ $books[0]->category->name }}" class="img-fluid">
        </div>
    @else
    <div class="text-center" style="padding-top: 1.5rem; padding-bottom: 1.5rem">
        <img src="https://picsum.photos/id/80/500/500" class="card-img-top" style="width: 20rem;" alt="{{ $books[0]->category }}">
    </div>
    @endif
       <div class="card-body text-center mb-5">
            <h3 class="card-title"><a href="/books/{{ $books[0]->id }}" class="text-decoration-none text-dark">{{ $books[0]->title }}</a></h3>
            <p>
                <small class="text-body-muted">
                By. <a href="/books?author={{ $books[0]->author }}" class="text-decoration-none">{{ $books[0]->author }}</a> in <a href="/books?category={{ $books[0]->category->slug }}" class="text-decoration-none px-1">{{ $books[0]->category->name }}</a>
                </small>
            </p>

            <p class="card-text">{{ $books[0]->description }}</p>
            <a href="/books/{{ $books[0]->id }}" class="text-decoration-none btn btn-info">Read More</a>
       </div> 


        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($books->skip(1) as $book)
                <div class="col">
                    <div class="card">
                        <div class="position-absolute bg-dark px-2 py-1 text-white">
                            <a href="/books?price={{ $book->price }}" class="text-decoration-none text-white">${{ $book->price }}</a>
                        </div>
                        @if ($book->image)
                            <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->category->name }}" class="img-fluid">
                        @else
                            <img src="https://picsum.photos/id/100/500/500" class="card-img-top" style="height: 13rem;" alt="{{ $book->author }}">  
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <p>
                                <small class="text-body-secondary">
                                    By. <a href="/books?author={{ $book->author }}" class="text-decoration-none">{{ $book->author }}</a> 
                                    {{ $book->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ $book->description }}</p>
                            <a href="/books/{{ $book->id }}" class="btn btn-info">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    

@else
<div class="container text-center">
    <p class="fs-4">No post found.</p>
</div>
@endif

@endsection