<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body>
    <h1 class="text-center text-2xl font-bold mt-6">Create Post</h1>
    <div class="col-lg-8 flex justify-center mt-6">
        <form method="POST" action="{{ route('posts.update', $posts->id) }}" class="mb-5" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $posts->title) }}">
            @error('title')
                <div class="invalid-feedback">
                  {{ $message }}  
                </div>
            @enderror
            </div>
            <div x-data="{ imageUrl: '{{ $posts->content ? asset('storage/' . $posts->content) : '' }}' }" class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Posts Image</label>
                <div class="mb-3">
                    <img x-show="imageUrl" :src="imageUrl" class="w-40 h-auto rounded shadow-md">
                </div>
                <input
                    type="file"
                    name="content"
                    id="content"
                    accept="image/*"
                    @change="imageUrl = URL.createObjectURL($event.target.files[0])"
                    class=" @error('content') border-red-500 @enderror"
                >
                @error('content')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        
            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-2 rounded-lg text-sm transition duration-300"><a href="{{ route('posts.index') }}">Cancel</a></button>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-2 rounded-lg text-sm transition duration-300">Update Post</button>
        </form>
    </div>
</body>
</html>