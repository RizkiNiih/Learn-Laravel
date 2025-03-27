@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Poroduct</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/products" class="mb-5" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
        @error('name')
            <div class="invalid-feedback">
              {{ $message }}  
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="desciption" required {{ old('description') }}>
        @error('description')
            <div class="invalid-feedback">
              {{ $message }}  
            </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required {{ old('price') }}>
        @error('price')
            <div class="invalid-feedback">
              {{ $message }}  
            </div>
        @enderror
      </div>
      
      <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
</div>
@endsection