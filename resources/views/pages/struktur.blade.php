@extends('layouts.app')
@section('content')
<section class="page-hero py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-5xl font-bold text-[#2D3748] mb-2">Struktur Organisasi Desa</h1>
        <p class="text-gray-500">Mengenal lebih dekat para aparatur pemerintah desa yang berdedikasi melayani masyarakat Desa Sejahtera.</p>
    </div>
</section>

<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">

    <div class="flex justify-center mb-20">
        @foreach(collect($pengurus)->where('kategori', 'pimpinan') as $p)
        <div class="w-64 group">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border-2 border-blue-600 transition-transform duration-300 group-hover:-translate-y-2">
                <img src="{{ asset('img/'.$p['foto']) }}" class="w-full h-64 object-cover" alt="{{ $p['nama'] }}">
                <div class="p-4 text-center bg-blue-600 text-white">
                    <p class="text-sm font-medium uppercase tracking-widest opacity-80">{{ $p['jabatan'] }}</p>
                    <h3 class="text-lg font-bold">{{ $p['nama'] }}</h3>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="max-w-7xl mx-auto mb-20">
        <h2 class="text-xl font-bold text-gray-800 mb-8 border-l-4 border-blue-600 pl-4">Sekretariat Desa</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach(collect($pengurus)->where('kategori', 'sekretariat') as $p)
            <div class="bg-white rounded-xl shadow-sm p-4 text-center border border-gray-100 hover:shadow-lg transition-shadow">
                <img src="{{ asset('img/'.$p['foto']) }}" class="w-full h-48 rounded-xl mx-auto mb-4 object-cover shadow-sm" alt="{{ $p['nama'] }}">
                <h4 class="font-bold text-gray-900">{{ $p['nama'] }}</h4>
                <p class="text-sm text-blue-600 font-medium">{{ $p['jabatan'] }}</p>
            </div>
            @endforeach
        </div>
    </div>

    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
        <div>
            <h2 class="text-xl font-bold text-gray-800 mb-8 border-l-4 border-green-500 pl-4">Pelaksana Teknis (Seksi)</h2>
            <div class="space-y-4">
                @foreach(collect($pengurus)->where('kategori', 'teknis') as $p)
                <div class="bg-white p-4 rounded-lg shadow-sm flex items-center border-l-4 border-green-500 hover:shadow-md transition-shadow">
                    <div class="flex-shrink-0 w-20 h-20 bg-gray-200 rounded-lg overflow-hidden shadow-sm">
                        <img src="{{ asset('img/'.$p['foto']) }}" class="w-full h-full object-cover">
                    </div>
                    <div class="ml-4">
                        <h4 class="font-bold text-gray-900">{{ $p['nama'] }}</h4>
                        <p class="text-xs text-gray-500 uppercase font-semibold">{{ $p['jabatan'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div>
            <h2 class="text-xl font-bold text-gray-800 mb-8 border-l-4 border-orange-500 pl-4">Pelaksana Kewilayahan (Kadus)</h2>
            <div class="space-y-4">
                @foreach(collect($pengurus)->where('kategori', 'wilayah') as $p)
                <div class="bg-white p-4 rounded-lg shadow-sm flex items-center border-l-4 border-orange-500 hover:shadow-md transition-shadow">
                    <div class="flex-shrink-0 w-20 h-20 bg-gray-200 rounded-lg overflow-hidden shadow-sm">
                        <img src="{{ asset('img/'.$p['foto']) }}" class="w-full h-full object-cover">
                    </div>
                    <div class="ml-4">
                        <h4 class="font-bold text-gray-900">{{ $p['nama'] }}</h4>
                        <p class="text-xs text-gray-500 uppercase font-semibold">{{ $p['jabatan'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection