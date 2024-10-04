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
        <header class="bg-blue-600 text-white p-5 flex justify-between items-center">
            <a href="/dashboard" class="text-xl">
                <h1>Sistem Informasi Posyandu Lansia Terpadu</h1>
            </a>
            <a href="/" class="text-white font-bold">Log Out</a>
        </header>

        <div class="flex flex-1">
            <aside class="bg-white w-64 p-5 shadow-md">
                <div class="text-center mb-8">
                    <div class="w-24 h-24 bg-gray-300 rounded-full mx-auto mb-4"></div>
                    <h2 class="text-lg font-bold">NAMA LENGKAP</h2>
                    <p class="text-gray-500 text-sm">NIK<br>Surabaya</p>
                </div>

                <nav>
                    <ul class="space-y-4">
                        <li><a href="/profil-wali" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Profil Wali</a></li>
                        <li><a href="/profil-lansia" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Profil Lansia</a></li>
                        <li><a href="/kelola-kunjungan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Kelola Kunjungan</a></li>
                        <li><a href="/hasil-kesehatan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out bg-yellow-500">Hasil Kesehatan</a></li>
                        <li><a href="/status-rujukan" class="text-black hover:bg-yellow-500 block p-3 rounded-lg transition duration-200 ease-in-out">Status Rujukan</a></li>
                    </ul>
                </nav>
            </aside>

            <div class="flex-1 p-8 bg-gray-100">
                <h2 class="text-2xl font-bold mb-6">Hasil Kesehatan</h2>
                
                <div class="space-y-4">
                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Pilih Bulan:</label>
                        <select class="w-full p-2 border border-gray-300 rounded-lg">
                            <option>Januari</option>
                            <!-- Add other months -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Pilih Tahun:</label>
                        <select class="w-full p-2 border border-gray-300 rounded-lg">
                            <option>2024</option>
                            <!-- Add other years -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Pilih Lansia:</label>
                        <select class="w-full p-2 border border-gray-300 rounded-lg">
                            <option value="" disabled selected>Pilih Lansia</option>
                            <option value="sugeng">Sugeng Rahayu</option>
                            <option value="bambang">Bambang Pamungkas</option>
                            <option value="yuni">Yuni Sagita</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Tanggal Check Up:</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Tekanan Darah:</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Berat Badan:</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Tinggi Badan:</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Gula Darah:</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Kolesterol:</label>
                        <input type="text" class="w-full p-2 border border-gray-300 rounded-lg">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-medium mb-1">Komentar dari Nakes:</label>
                        <textarea class="w-full p-2 border border-gray-300 rounded-lg h-24" readonly></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-blue-600 text-white text-center py-4">
        © 2024 ALL RIGHTS RESERVED
    </footer>
</body>
</html>

<script>
  // Get the select elements for month and year
  const monthSelect = document.querySelector('select[name="month"]');
  const yearSelect = document.querySelector('select[name="year"]');

  // Get the input elements for health data
  const healthDataInputs = document.querySelectorAll('input[name="healthData"]');

  // Get the textarea element for doctor's comment
  const doctorCommentTextarea = document.querySelector('textarea[name="doctorComment"]');

  // Function to get the previous month's health data
  function getPreviousMonthHealthData(month, year) {
    // Assume we have a function to retrieve the previous month's health data
    // For demonstration purposes, we'll just return some sample data
    return {
      bloodPressure: 120,
      weight: 60,
      height: 170,
      bloodSugar: 100,
      cholesterol: 200
    };
  }

  // Function to check if health data has decreased
  function hasHealthDataDecreased(currentData, previousData) {
    if (currentData.bloodPressure < previousData.bloodPressure) {
      return true;
    }
    if (currentData.weight < previousData.weight) {
      return true;
    }
    if (currentData.height < previousData.height) {
      return true;
    }
    if (currentData.bloodSugar < previousData.bloodSugar) {
      return true;
    }
    if (currentData.cholesterol < previousData.cholesterol) {
      return true;
    }
    return false;
  }

  // Add event listener to the form submission
  document.querySelector('form').addEventListener('submit', (e) => {
    e.preventDefault();

    // Get the selected month and year
    const selectedMonth = monthSelect.value;
    const selectedYear = yearSelect.value;

    // Get the current health data from the input fields
    const currentHealthData = {};
    healthDataInputs.forEach((input) => {
      currentHealthData[input.name] = input.value;
    });

    // Get the previous month's health data
    const previousHealthData = getPreviousMonthHealthData(selectedMonth, selectedYear);

    // Check if health data has decreased
    if (hasHealthDataDecreased(currentHealthData, previousHealthData)) {
      alert('Hasil kesehatan menurun dari bulan-bulan lalu!');
    } else {
      alert('Hasil kesehatan stabil atau meningkat!');
    }
  });
</script>
