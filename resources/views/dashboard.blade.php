<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Posyandu Lansia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex flex-col min-h-screen">
        <!-- Header -->
        <header class="bg-blue-600 text-white p-5 flex justify-between items-center rounded-">
            <h1 class="text-xl">Sistem Informasi Posyandu Lansia Terpadu</h1>
            <a href="/" class="text-white font-bold">Log Out</a>
        </header>

        <!-- Main Content -->
        <div class="flex flex-1">
            <!-- Sidebar -->
            <aside class="bg-white w-64 p-5 shadow-md">
                <div class="text-center mb-8">
                    <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-4"></div>
                    <h2 class="text-lg font-bold">MULYONO</h2>
                    <p class="text-gray-500 text-sm">12345678<br>Surabaya</p>
                </div>

                <nav>
                    <ul class="space-y-4">
                        <!-- Navigation Links -->
                        <li><a href="/profil-wali" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Profil Wali</a></li>
                        <li><a href="/profil-lansia" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Profil Lansia</a></li>
                        <li><a href="/kelola-kunjungan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Kelola Kunjungan</a></li>
                        <li><a href="/hasil-kesehatan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Hasil Kesehatan</a></li>
                        <li><a href="/status-rujukan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Status Rujukan</a></li>
                    </ul>
                </nav>
            </aside>

            <!-- Content -->
            <section class="flex-1 p-8 bg-gray-100">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('img/gambar.jpeg') }}" alt="trste" class="w-60 h-auto rounded-full">
                        <div>
                            <h2 class="text-2xl font-bold">Selamat Pagi!</h2>
                            <p class="text-gray-600">Selamat datang di Portal Posyandu Lansia</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <footer class="bg-blue-600 text-white text-center py-4">
        © 2024 ALL RIGHTS RESERVED
    </footer>
</body>
</html>
