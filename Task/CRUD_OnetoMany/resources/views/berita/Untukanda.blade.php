<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untuk Anda - Portal Berita</title>
    @vite('resources/css/app.css')
    <style>
        .news-card {
            transition: all 0.3s ease;
        }
        .news-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .news-image {
            transition: transform 0.3s ease;
        }
        .news-card:hover .news-image {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">

    <header class="bg-white shadow-sm border-b sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-gray-900">Berita Dingin</h1>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ route('berita.home') }}" class="text-gray-600 hover:text-gray-900 font-medium">Beranda</a>
                    <a href="{{ route('berita.Untukanda') }}" class="text-blue-600 font-medium">Untuk Anda</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-2">Untuk Anda</h2>
            <p class="text-gray-600 text-center">Berita yang dipersonalisasi sesuai minat dan preferensi Anda</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <article class="news-card bg-white rounded-lg shadow-md overflow-hidden cursor-pointer">
                <a href="detail.html" class="block">
                    <div class="overflow-hidden">
                        <img src="https://tse2.mm.bing.net/th/id/OIP.Qy9RRU1cEhNc0HxYyYhUZQAAAA?cb=thfvnext&rs=1&pid=ImgDetMain&o=7&rm=3" 
                             alt="Berita Politik Terkini" 
                             class="news-image w-full h-48 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 line-clamp-2 hover:text-blue-600">
                            Pemerintah Umumkan Kebijakan Baru untuk Meningkatkan Perekonomian Nasional
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 mt-4">
                            <span>2 jam yang lalu</span>
                        </div>
                    </div>
                </a>
            </article>
        </div>

        <div class="text-center mt-12">
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-8 rounded-lg transition-colors duration-200">
                Tambah Berita Lainnya
            </button>
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
