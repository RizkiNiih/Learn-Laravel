@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-5">{{ $profile->title }}</h1>

            <a href="/dashboard/profiles" class="btn btn-success"><i class="bi bi-arrow-left-short"></i> Back to all my post</a>
            <a href="/dashboard/profiles/{{ $profile->slug }}/edit" class="btn btn-warning"><i class="bi bi-scissors"></i> Edit</a>
            <form action="/dashboard/profiles/{{ $profile->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><i class="bi bi-x-circle mt-1 text-white"></i> Delete</button>
              </form>

              @if ($profile->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/' . $profile->image) }}" alt="{{ $profile->category->name }}" class="img-fluid mt-3">
                </div>
              @else
                <img src="https://placehold.co/1200x400?{{ $profile->category->name }}" alt="{{ $user->author->name }}"  class="img-fluid mt-3">
              @endif

            <article class="my-3 fs-5">
                {!! $profile->body !!}
            </article>

        </div>
    </div>
</div>
@endsection