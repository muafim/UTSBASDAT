<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Posyandu Lansia</title>
    <link href="https://fonts.googleapis.com/css2?family=Arial:wght@400&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex flex-col h-screen">
        <header class="bg-blue-700 text-white p-5 flex justify-between items-center">
            <a href="/dashboard" class="text-xl">
                <h1>Sistem Informasi Posyandu Lansia Terpadu</h1>
            </a>
            <a href="/" class="text-white text-lg font-bold">Log Out</a>
        </header>

        <div class="flex flex-1">
            <aside class="bg-white w-64 p-5 shadow-lg">
                <div class="text-center mb-6">
                    <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-2"></div>
                    <h2 class="text-lg font-bold">NAMA LENGKAP</h2>
                    <p class="text-gray-600">NIK<br>Surabaya</p>
                </div>
                <nav>
                    <ul class="space-y-4">
                        <li><a href="/profil-wali" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Profil Wali</a></li>
                        <li><a href="/profil-lansia" class="text-black hover:bg-yellow-500 bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Profil Lansia</a></li>
                        <li><a href="/kelola-kunjungan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Kelola Kunjungan</a></li>
                        <li><a href="/hasil-kesehatan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Hasil Kesehatan</a></li>
                        <li><a href="/status-rujukan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Status Rujukan</a></li>
                    </ul>
                </nav>
            </aside>

            <!-- Content -->
            <div class="flex-1 p-5 bg-gray-100">
                <h2 class="text-2xl mb-6 font-semibold">Profil Lansia</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p class="font-bold text-gray-700">Nama Lansia:</p>
                        <input type="text" placeholder="Masukkan Nama Lansia" class="w-full p-3 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all">
                    </div>

                    <div>
                        <p class="font-bold text-gray-700">NIK:</p>
                        <input type="text" placeholder="Masukkan NIK" class="w-full p-3 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                    </div>

                    <div>
                        <p class="font-bold text-gray-700">Tanggal Lahir:</p>
                        <input type="date" class="w-full p-3 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all">
                    </div>

                    <div>
                        <p class="font-bold text-gray-700">Alamat:</p>
                        <input type="text" placeholder="Masukkan Alamat" class="w-full p-3 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all">
                    </div>

                    <div>
                        <p class="font-bold text-gray-700">Jenis Kelamin:</p>
                        <select class="w-full p-3 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all">
                            <option>Pilih Jenis Kelamin</option>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>

                    <div>
                        <p class="font-bold text-gray-700">Alergi Obat:</p>
                        <input type="text" placeholder="Masukkan Alergi Obat (jika ada)" class="w-full p-3 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all">
                    </div>

                    <div>
                        <p class="font-bold text-gray-700">Nomor Telepon:</p>
                        <input type="text" placeholder="Masukkan Nomor Telepon" class="w-full p-3 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                    </div>

                    <!-- New Input for Image Upload -->
                    <div>
                        <p class="font-bold text-gray-700">Upload Foto Lansia:</p>
                        <input type="file" accept="image/*" class="w-full p-3 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-all" required>
                        <small class="text-gray-600">Ukuran gambar 4x3.</small>
                    </div>
                </div>

                <button class="bg-blue-700 text-white py-3 px-6 rounded-lg mt-6 hover:bg-blue-800 transition-all duration-300 transform hover:scale-105 shadow-md" id="tambahLansia">Tambahkan Lansia</button>
            </div>
        </div>
    </div>
    <footer class="bg-blue-600 text-white text-center py-4">
        © 2024 ALL RIGHTS RESERVED
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('tambahLansia').addEventListener('click', function () {
                Swal.fire({
                    title: 'Berhasil!',
                    text: 'Lansia berhasil ditambahkan.',
                    icon: 'success',
                    showConfirmButton: false, 
                    timer: 1500 
                });
            });
        });
    </script>
</body>
</html>
