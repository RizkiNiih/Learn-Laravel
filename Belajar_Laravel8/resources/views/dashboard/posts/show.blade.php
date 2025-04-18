@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-5">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left-short"></i> Back to all my post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-scissors"></i> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><i class="bi bi-x-circle mt-1 text-white"></i> Delete</button>
              </form>

              @if ($post->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>
              @else
                <img src="https://placehold.co/1200x400?{{ $post->category->name }}" alt="{{ $post->author->name }}"  class="img-fluid mt-3">
              @endif

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>

            <a href="/posts" class="text-decoration-none">Back to Posts</a>

        </div>
    </div>
</div>
@endsection