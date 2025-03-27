@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Book</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/books/{{ $book->id }}" class="mb-5" enctype="multipart/form-data">
      @method('put')
        @csrf
      <div class="mb-3">
        <label for="category_id" class="form-label">Category</label>
        <select class="form-select" name="category_id">
          @foreach ($categories as $category)
            @if(old('category_id', $book->category_id) == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
           @endif
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ $book->title }}">
        @error('name')
            <div class="invalid-feedback">
              {{ $message }}  
            </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="author" class="form-label">Author</label>
        <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" required autofocus value="{{ $book->author }}">
        @error('author')
            <div class="invalid-feedback">
              {{ $message }}  
            </div>
        @enderror
      </div>
 
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required value="{{ $book->price }}">
        @error('price')
        <div class="invalid-feedback">
          {{ $message }}  
        </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="desciption" class="form-label">Description</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" required value="{{ $book->description }}">
        @error('description')
            <div class="invalid-feedback">
              {{ $message }}  
            </div>
        @enderror
      </div>
      
      <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
</div>
@endsection