<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-center text-3xl font-bold mt-6">Detail Content</h1>
    <form action="{{ route('posts.show', $posts->id) }}">
    @csrf
    <table class="w-full mt-8">
    <tr>
        <td class="pt-6">
          <div class="flex flex-col items-center space-y-4">
            <div class="flex items-center space-x-2">
              <span class="font-semibold text-xl">Title:</span>
              <span class="font-normal">{{ $posts->title }}</span>
            </div>
            <div class="flex items-center space-x-2 mt-4">
              <span class="font-semibold text-xl">Content:</span>
              <img src="{{ url('storage/' . $posts->content) }}" class="h-[86px] w-[86px] object-cover rounded" />
            </div>
          </div>
        </td>
    </tr>
    </table>
    <div class="flex justify-center mt-4">
      <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg text-sm transition duration-300">
        <a href="{{ route('posts.index') }}">Back</a>
      </button>
    </div>

    </form>
</body>
</html>