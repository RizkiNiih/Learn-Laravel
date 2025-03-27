@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Product</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/products/{{ $product->id }}" class="mb-5" enctype="multipart/form-data">
      @method('put')
        @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ $product->name }}">
        @error('name')
            <div class="invalid-feedback">
              {{ $message }}  
            </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="desciption" class="form-label">Description</label>
        <input type="text" class="form-control @error('desciption') is-invalid @enderror" id="desciption" name="desciption" required value="{{ old('desciption', $product->desciption) }}">
        @error('desciption')
            <div class="invalid-feedback">
              {{ $message }}  
            </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required value="{{ old('price', $product->price) }}">
        @error('price')
            <div class="invalid-feedback">
              {{ $message }}  
            </div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>
@endsection