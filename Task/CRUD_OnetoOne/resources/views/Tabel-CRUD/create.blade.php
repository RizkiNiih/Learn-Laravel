<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Data Table</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="bg-white rounded-lg shadow-sm overflow-hidden mb-8">
            <div class="px-6 py-4 bg-gray-50 border-b text-center">
                <h2 class="text-4xl font-medium text-gray-800">Add Data</h2>
            </div>
            
            <form class="p-6" action="{{ route('Tabel-CRUD.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table class="w-full">
                    <tbody>
                        <tr class="border-b">
                            <td class="py-3 pr-4 font-medium text-gray-700 w-1/4">Image</td>
                            <td class="py-3">
                                <input type="file" name="image" id="image" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent form-control form-control-solid mb-3 mb-lg-0 {{ $errors->get("image") ? "is-invalid border border-1 border-danger" : "" }}" value="{{ old('image') }}" />
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 pr-4 font-medium text-gray-700 w-1/4">Name</td>
                            <td class="py-3">
                                <input type="text" id="nama" name="nama" 
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent"
                                       placeholder="Enter name">
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 pr-4 font-medium text-gray-700">Nis</td>
                            <td class="py-3">
                                <input type="number" id="nis" name="nis"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent"
                                placeholder="Enter Nis">
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 pr-4 font-medium text-gray-700">Nisn</td>
                            <td class="py-3">
                                <input type="number" id="nisn" name="nisn"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent"
                                placeholder="Enter Nisn">
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 pr-4 font-medium text-gray-700">Tempat Lahir</td>
                            <td class="py-3">
                                <input type="text" id="tempatlahir" name="tempatlahir"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent"
                                placeholder="Enter Tempat Lahir">
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 pr-4 font-medium text-gray-700">Tanggal Lahir</td>
                            <td class="py-3">
                                <input type="date" id="tanggallahir" name="tanggallahir"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent">
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 pr-4 font-medium text-gray-700">Jenis Kelamin</td>
                            <td class="py-3 space-x-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" id="jeniskelamin" name="jeniskelamin" value="Laki-laki" class="text-cyan-500  focus:ring-cyan-500">
                                    <span class="ml-2">Laki-laki</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" id="jeniskelamin" name="jeniskelamin" value="Perempuan" class="text-cyan-500 focus:ring-cyan-500">
                                    <span class="ml-2">Perempuan</span>
                                </label>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 pr-4 font-medium text-gray-700">Agama</td>
                            <td class="py-3">
                                <select name="agama" id="agama" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent">
                                    <option>-- Pilih Agama --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 pr-4 font-medium text-gray-700">Email</td>
                            <td class="py-3">
                                <input type="email" id="email" name="email"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent"
                                placeholder="Enter email address" required>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 pr-4 font-medium text-gray-700">Hobi</td>
                            <td class="py-3 space-x-4">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" id="hobi[]" name="hobi[]" value="Renang" class="text-cyan-500 focus:ring-cyan-500">
                                    <span class="ml-2">Renang</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" id="hobi[]" name="hobi[]" value="Bulu Tangkis" class="text-cyan-500 focus:ring-cyan-500">
                                    <span class="ml-2">Bulu Tangkis</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" id="hobi[]" name="hobi[]" value="Lari" class="text-cyan-500 focus:ring-cyan-500">
                                    <span class="ml-2">Lari</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" id="hobi[]" name="hobi[]" value="Mancing" class="text-cyan-500 focus:ring-cyan-500">
                                    <span class="ml-2">Mancing</span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-4 font-medium text-gray-700">Warna</td>
                            <td class="py-3">
                                <input id="warna" name="warna" type="color" class="w-10 h-10 cursor-pointer"/>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="flex justify-end space-x-4 mt-6 pt-4 border-t">
                    <button class="px-6 py-2 border bg-red-500 text-white rounded-lg hover:bg-red-700 transition-colors">
                        <a href="{{ route('Tabel-CRUD.index') }}">Back</a>
                    </button>
                    <button type="submit" 
                            class="px-6 py-2 bg-cyan-500 hover:bg-cyan-600 text-white rounded-lg transition-colors">
                        Add Student
                    </button>
                </div>
            </form>
    </div>
</body>
</html>