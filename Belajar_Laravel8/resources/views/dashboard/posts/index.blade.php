@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>
<div class="table-responsivel col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i class="bi bi-eye-fill mt-1 text-dark"></i></a>
            <a href="" class="badge bg-warning"><i class="bi bi-scissors mt-1 text-dark"></i></a>
            <a href="/dashboard/posts/{{ $post->id }}" class="badge bg-danger"><i class="bi bi-x-circle mt-1 text-white"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection