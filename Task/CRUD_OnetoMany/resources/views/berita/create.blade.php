<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Berita Baru - Portal Berita</title>
    @vite('resources/css/app.css')
    <style>
        .form-card {
            transition: all 0.3s ease;
        }
        .form-card:hover {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .input-focus {
            transition: all 0.2s ease;
        }
        .input-focus:focus {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.15);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <header class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        </div>
    </header>
    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Buat Berita Baru</h2>
            <p class="text-gray-600">Bagikan informasi terbaru dengan pembaca</p>
        </div>

        <div class="form-card bg-white rounded-xl shadow-lg overflow-hidden">
            <form class="p-8 space-y-6">
                <div>
                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                        Judul Berita 
                    </label>
                    <input 
                        type="text" 
                        id="title" 
                        name="title" 
                        required
                        placeholder="Masukkan judul berita yang menarik..."
                        class="input-focus w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                    >
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Foto Berita
                    </label>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-blue-400">
                        <div class="space-y-4">
                            <div class="mx-auto w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <label for="image-upload" class="cursor-pointer">
                                    <span class="text-gray-600 font-medium">Klik untuk upload gambar</span>
                                    <p class="text-sm text-gray-500">PNG, JPG, JPEG hingga 10MB</p>
                                </label>
                            </div>
                        </div>
                        <input type="file" class="mt-4 w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" accept="image/*" id="image-upload" name="image" required>
                    </div>
                </div>

                <div>
                    <label for="summary" class="block text-sm font-semibold text-gray-700 mb-2">
                        Ringkasan Berita
                    </label>
                    <textarea 
                        id="summary" 
                        name="summary" 
                        rows="3"
                        placeholder="Tulis ringkasan singkat berita"
                        class="input-focus w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none resize-none"
                    ></textarea>
                </div>

                <div>
                    <label for="content" class="block text-sm font-semibold text-gray-700 mb-2">
                        Isi Berita
                    </label>
                    <textarea 
                        id="content" 
                        name="content" 
                        rows="12"
                        required
                        placeholder="Tulis isi berita lengkap di sini..."
                        class="input-focus w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none resize-none"
                    ></textarea>
                </div>

                <div>
                    <label for="tags" class="block text-sm font-semibold text-gray-700 mb-2">
                        Tags
                    </label>
                    <input 
                        type="text" 
                        id="tags" 
                        name="tags" 
                        placeholder="Pisahkan dengan koma (contoh: breaking news, politik, indonesia)"
                        class="input-focus w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                    >
                </div>

                <div class="flex flex-col sm:flex-row gap-4 pt-6">
                    <button 
                        type="submit"
                        class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-200 transform hover:scale-105 focus:ring-4 focus:ring-blue-200">
                        Publikasikan Berita
                    </button>
                    <a href="{{ route('berita.home') }}" class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-3 px-6 rounded-lg transition-all duration-200 text-center">
                        <button type="button">
                            Kembali
                        </button>
                    </a>
                </div>
            </form>
        </div>
    </main>

    <footer class="bg-gray-900 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-xl font-bold mb-4">Portal Berita</h3>
                    <p class="text-gray-400 mb-4">
                        Sumber berita terpercaya yang menyajikan informasi terkini dan akurat untuk masyarakat Indonesia.
                    </p>
                </div>  
                <div>
                    <h4 class="font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Email: info@portalberita.com</li>
                        <li>Telepon: (021) 123-4567</li>
                        <li>Alamat: Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Portal Berita. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>
</body>
</html>
