<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-semibold text-gray-800">Table List</h1>
            <a href="{{ route('Tabel-CRUD.create') }}" class="bg-cyan-500 hover:bg-cyan-600 text-white px-6 py-2 rounded-lg font-medium transition-colors">
                Add
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
            <div class="grid grid-cols-12 gap-4 px-6 py-4 bg-gray-50 border-b text-sm font-bold text-gray-600">
                <div class="col-span-2">Name</div>
                <div>NIS</div>
                <div>NISN</div>
                <div>Tempat Lahir</div>
                <div>Tanggal Lahir</div>
                <div>Jenis Kelamin</div>
                <div>Agama</div>
                <div>Email</div>
                <div>Hobi</div>
                <div>Warna</div>
                <div>Actions</div>
            </div>

            <div id="studentsList">
                @foreach ($students as $student)
                <div class="grid grid-cols-12 gap-4 px-6 py-4 border-b hover:bg-gray-50 transition-colors">
                    <div class="col-span-2 flex items-center space-x-3">
                        <div class="w-10 h-10 flex items-center justify-center">
                            @if ($student->image && file_exists(public_path('storage/images/' . $student->image)))
                                <img src="{{ asset('storage/images/' . $student->image) }}" alt="{{ $student->nama }}" class="w-10 h-10 rounded-full object-cover" />
                            @else
                                <div class="w-10 h-10 rounded-full bg-gray-300 flex items-center justify-center text-white">N/A</div>
                            @endif

                        </div>
                        <span class="text-gray-800 font-medium">{{ $student->nama }}</span>
                    </div>
                    <div class="text-gray-600">{{ $student->nis }}</div>
                    <div class="text-gray-600">{{ $student->nisn->nisn ?? '-' }}</div>
                    <div class="text-gray-600">{{ $student->tempatlahir }}</div>
                    <div class="text-gray-600">{{ $student->tanggallahir }}</div>
                    <div class="text-gray-600">{{ $student->jeniskelamin }}</div>
                    <div class="text-gray-600">{{ $student->agama }}</div>
                    <div class="break-words whitespace-normal text-gray-600">{{ $student->email }}</div>
                    <div class="break-words whitespace-normal text-gray-600">{{ $student->hobi }}</div>
                    <div class="text-gray-600">{{ $student->warna }}</div>
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('Tabel-CRUD.edit', $student->id) }}" class="text-cyan-500 hover:text-cyan-600">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('Tabel-CRUD.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-600">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
