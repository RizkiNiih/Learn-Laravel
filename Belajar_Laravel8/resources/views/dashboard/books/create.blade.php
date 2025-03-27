@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Book</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/books" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category_id">
          @foreach ($categories as $category)
            @if(old('category_id') == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
           @endif
          @endforeach
        </select>
      </div>
      <div class="mb-3 form-floating">
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title" autofocus required value="{{ old('title') }}">
        <label for="title">Title</label>
        @error('title')
            <div class="invalid-feedback">
              {{ $message }}  
            </div>
        @enderror
      </div>
      <div class="mb-3 form-floating">
        <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" placeholder="Author" name="author" required {{ old('author') }}>
        <label for="author" class="form-label">Author</label>
        @error('author')
            <div class="invalid-feedback">
              {{ $message }}  
            </div>
        @enderror
      </div>
      <div class="mb-3 form-floating">
        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Price" name="price" required {{ old('price') }}>
        <label for="price" class="form-label">Price</label>
        @error('price')
            <div class="invalid-feedback">
              {{ $message }}  
            </div>
        @enderror
      </div>
      <div class="mb-3 form-floating">
        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Description" name="description" required {{ old('description') }}>
        <label for="description" class="form-label">Description</label>
        @error('description')
            <div class="invalid-feedback">
              {{ $message }}  
            </div>
        @enderror
      </div>
      
      <button type="submit" class="btn btn-primary">Create Book</button>
    </form>
</div>
@endsection