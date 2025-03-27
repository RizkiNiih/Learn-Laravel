@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Books</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-9" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsivel col-lg-9">
  <a href="/dashboard/books/create" class="btn btn-primary mb-3">Create new book</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr class="text-center">
        <th scope="col">Category</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($books as $post)
      <tr class="text-center">
        <td>{{ $post->category->name }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->author }}</td>
        <td>${{ $post->price }}</td>
        <td class="text-start" style="max-width: 19rem">{{ $post->description }}</td>
        <td>
          <a href="/dashboard/books/{{ $post->id }}" class="badge bg-info"><i class="bi bi-eye-fill mt-1 text-dark"></i></a>
          <a href="/dashboard/books/{{ $post->id }}/edit" class="badge bg-warning"><i class="bi bi-scissors mt-1 text-dark"></i></a>
          <form action="/dashboard/books/{{ $post->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="bi bi-x-circle mt-1 text-white"></i></button>
          </form>
          
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection