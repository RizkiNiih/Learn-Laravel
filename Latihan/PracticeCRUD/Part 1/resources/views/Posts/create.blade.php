<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-center text-2xl font-bold mt-6">Create Post</h1>
    <div class="col-lg-8 flex justify-center mt-6">
        <form method="post" action="{{ route('posts.store') }}" class="mb-5" enctype="multipart/form-data">
            @csrf
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                  {{ $message }}  
                </div>
            @enderror
            </div>
            <div class="mb-3">
              <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Posts Contemt</label>
                <input type="file" id="content" name="content"
                  onchange="previewImage()"
                  class="w-full border border-gray-300 rounded-lg px-4 py-2 @error('content') @enderror">
                <img class="img-preview mt-3 w-40 h-auto hidden">
                @error('content')
                  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        
            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-2 rounded-lg text-sm transition duration-300"><a href="{{ route('posts.index') }}">Cancel</a></button>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-2 rounded-lg text-sm transition duration-300">Create Post</button>
        </form>
    </div>
</body>
</html>