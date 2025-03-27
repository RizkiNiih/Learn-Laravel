@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Products</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-9" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsivel col-lg-9">
  <a href="/dashboard/products/create" class="btn btn-primary mb-3">Create new product</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $post)
      <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->name }}</td>
        <td>{{ $post->desciption }}</td>
        <td>{{ $post->price }}</td>
        <td>
          <a href="/dashboard/products/{{ $post->id }}" class="badge bg-info"><i class="bi bi-eye-fill mt-1 text-dark"></i></a>
          <a href="/dashboard/products/{{ $post->id }}/edit" class="badge bg-warning"><i class="bi bi-scissors mt-1 text-dark"></i></a>
          <form action="/dashboard/products/{{ $post->id }}" method="post" class="d-inline">
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