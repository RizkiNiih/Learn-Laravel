<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comment</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-center font-bold text-3xl mt-6">Post</h1>

    <form action="{{ route('posts.index') }}" method="GET"></form>

    <table class="mt-8 min-w-full">
        <thead class="bg-gray-300">
            <tr class="text-left text-xs font-bold tracking-wider">
                <th class="px-6 py-3 min-w-[125px]">No</th>
                <th class="px-6 py-3 min-w-[125px]">Title</th>
                <th class="px-6 py-3 min-w-[125px]">Content</th>
                <th class="px-6 py-3 min-w-[125px]">Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @foreach ($posts as $post)    
                <tr class="bg-gray-200 hover:bg-gray-300 transition">
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $post->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $post->title }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">
                        <img src="{{ url('storage/' . $post->content) }}" class="h-36 w-36 object-cover" />
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-700 text-right">
                    <div class="flex flex-row justify-start items-center space-x-2">
                        <!-- View Button -->
                        <a href="{{ route('posts.show', $post->id) }}" class="bg-sky-500 p-2 rounded hover:bg-sky-600 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" height="12" width="13.5" viewBox="0 0 576 512">
                                <path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                            </svg>
                        </a>

                        <!-- Edit Button -->
                        <a href="{{ route('posts.edit', $post->id) }}" class="bg-yellow-400 p-2 rounded hover:bg-yellow-500 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512">
                                <path fill="#000000" d="M256 192l-39.5-39.5c4.9-12.6 7.5-26.2 7.5-40.5C224 50.1 173.9 0 112 0S0 50.1 0 112s50.1 112 112 112c14.3 0 27.9-2.7 40.5-7.5L192 256l-39.5 39.5c-12.6-4.9-26.2-7.5-40.5-7.5C50.1 288 0 338.1 0 400s50.1 112 112 112s112-50.1 112-112c0-14.3-2.7-27.9-7.5-40.5L499.2 76.8c7.1-7.1 7.1-18.5 0-25.6c-28.3-28.3-74.1-28.3-102.4 0L256 192zm22.6 150.6L396.8 460.8c28.3 28.3 74.1 28.3 102.4 0c7.1-7.1 7.1-18.5 0-25.6L342.6 278.6l-64 64zM64 112a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm48 240a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                            </svg>
                        </a>

                        <!-- Delete Button -->
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="bg-red-500 p-2 rounded hover:bg-red-600 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" height="14" width="12.25" viewBox="0 0 448 512">
                                    <path fill="#ffffff" d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('posts.create') }}" class="block ml-6 mt-6 mx-auto text-center font-semibold hover:text-blue-500 hover:underline">Create New Post</a>
</body>
</html>
