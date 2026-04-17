<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Desa Sejahtera</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CDN Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-purple-100 to-white">

<!-- Navbar -->
<nav class="flex justify-between items-center p-5 bg-white shadow">
    <h1 class="text-xl font-bold text-blue-600">Desa Sejahtera</h1>
    <div class="space-x-5">
        <a href="#" class="text-blue-600 font-semibold">Beranda</a>
        <a href="#">Profile Desa</a>
        <a href="#">Informasi</a>
        <a href="#">Layanan</a>
    </div>
</nav>

<!-- Hero -->
<section class="grid md:grid-cols-2 gap-10 items-center p-10">
    <div>
        <h2 class="text-4xl font-bold">
            Selamat Datang di <br>
            <span class="text-blue-600">Desa Sejahtera</span>
        </h2>
        <p class="mt-4 text-gray-600">
            Portal resmi Desa Sejahtera untuk memberikan informasi dan layanan terbaik kepada masyarakat.
        </p>

        <div class="mt-6 space-x-3">
            <button class="bg-blue-600 text-white px-5 py-2 rounded-lg">Layanan Kami</button>
            <button class="bg-gray-200 px-5 py-2 rounded-lg">Profil Desa</button>
        </div>
    </div>

    <div>
        <img src="{{ asset('img/desa.jpg') }}"
             class="rounded-2xl shadow-lg">
    </div>
</section>

<!-- Statistik -->
<section class="grid md:grid-cols-4 gap-6 px-10 pb-10">

    <div class="bg-white p-5 rounded-xl shadow">
        <h3 class="text-2xl font-bold">{{ number_format($data['penduduk']) }}</h3>
        <p class="text-gray-500">Total Penduduk</p>
    </div>

    <div class="bg-white p-5 rounded-xl shadow">
        <h3 class="text-2xl font-bold">{{ number_format($data['keluarga']) }}</h3>
        <p class="text-gray-500">Kepala Keluarga</p>
    </div>

    <div class="bg-white p-5 rounded-xl shadow">
        <h3 class="text-2xl font-bold">{{ $data['berita'] }}</h3>
        <p class="text-gray-500">Berita Bulan Ini</p>
    </div>

    <div class="bg-white p-5 rounded-xl shadow">
        <h3 class="text-2xl font-bold">{{ $data['pengaduan'] }}%</h3>
        <p class="text-gray-500">Pengaduan Selesai</p>
    </div>

</section>

</body>
</html>