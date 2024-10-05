<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Posyandu Lansia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <div class="flex flex-col flex-1">
        <header class="bg-blue-600 text-white p-5 flex justify-between items-center">
            <a href="/dashboard" class="text-xl">
                <h1>Sistem Informasi Posyandu Lansia Terpadu</h1>
            </a>
            <a href="/" class="text-white text-lg font-bold">Log Out</a>
        </header>

        <div class="flex flex-1">
            <aside class="w-64 bg-white p-5 shadow-md">
                <div class="text-center mb-8">
                    <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto"></div>
                    <h2 class="text-xl font-semibold mt-4">{{ $wali->nama }}</h2> <!-- Menampilkan nama dari database -->
                    <p class="text-gray-600">{{ $wali->nik }}<br>Surabaya</p> <!-- Menampilkan NIK -->
                </div>

                <nav>
                    <ul class="space-y-4">
                        <li><a href="/profil-wali" class="text-black hover:bg-yellow-500 bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Profil Wali</a></li>
                        <li><a href="/profil-lansia" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Profil Lansia</a></li>
                        <li><a href="/kelola-kunjungan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Kelola Kunjungan</a></li>
                        <li><a href="/hasil-kesehatan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out ">Hasil Kesehatan</a></li>
                        <li><a href="/status-rujukan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Status Rujukan</a></li>
                    </ul>
                </nav>
            </aside>

            <div class="flex-1 p-8 bg-gray-100">
                <h2 class="text-2xl font-semibold mb-6">Profil Wali</h2>
                <form method="POST" action="{{ route('profil.wali.update') }}">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <label class="font-bold" for="name">Nama:</label>
                            <input type="text" id="name" name="nama" value="{{ $wali->nama }}" class="w-full p-2 border border-gray-300 rounded transition duration-300 focus:ring focus:ring-yellow-300" placeholder="Masukkan Nama">
                        </div>
                        <div>
                            <label class="font-bold" for="email">Email:</label>
                            <input type="email" id="email" name="email" value="{{ $wali->email }}" class="w-full p-2 border border-gray-300 rounded transition duration-300 focus:ring focus:ring-yellow-300" placeholder="Masukkan Email">
                        </div>
                        <div>
                            <label class="font-bold" for="address">Alamat:</label>
                            <input type="text" id="address" name="alamat" value="{{ $wali->alamat }}" class="w-full p-2 border border-gray-300 rounded transition duration-300 focus:ring focus:ring-yellow-300" placeholder="Masukkan Alamat">
                        </div>
                        <div>
                            <label class="font-bold" for="gender">Jenis Kelamin:</label>
                            <select id="gender" name="jenis_kelamin" class="w-full p-2 border border-gray-300 rounded transition duration-300 focus:ring focus:ring-yellow-300">
                                <option value="" disabled>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki" {{ $wali->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ $wali->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="font-bold" for="nik">NIK:</label>
                            <input type="text" id="nik" name="nik" value="{{ $wali->nik }}" class="w-full p-2 border border-gray-300 rounded transition duration-300 focus:ring focus:ring-yellow-300" placeholder="Masukkan NIK">
                        </div>
                        <div>
                            <label class="font-bold" for="phone">Nomor Telepon:</label>
                            <input type="text" id="phone" name="no_telpon" value="{{ $wali->no_telpon }}" class="w-full p-2 border border-gray-300 rounded transition duration-300 focus:ring focus:ring-yellow-300" placeholder="Masukkan Nomor Telepon">
                        </div>
                    </div>
                    <button type="submit" class="bg-yellow-500 text-white py-3 px-4 rounded hover:bg-yellow-600 transition-all w-full mt-4">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="bg-blue-600 text-white text-center py-4">
        © 2024 ALL RIGHTS RESERVED
    </footer>
</body>
</html>
