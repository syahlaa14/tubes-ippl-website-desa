@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <h1>Layanan Desa</h1>
        <p>Layanan informasi dan pengaduan untuk masyarakat</p>
    </div>
</section>

<section class="container section-space">
    <div class="service-grid">

        <a href="{{ route('data.penduduk') }}" class="card service-card">
            <div class="service-icon">👥</div>
            <h3>Data Penduduk</h3>
            <p>Lihat statistik dan informasi penduduk desa</p>
        </a>

        <a href="{{ route('berita.index') }}" class="card service-card">
            <div class="service-icon">📰</div>
            <h3>Berita Desa</h3>
            <p>Berita terkini seputar desa</p>
        </a>

        <a href="{{ route('pengaduan') }}" class="card service-card">
            <div class="service-icon">💬</div>
            <h3>Pengaduan</h3>
            <p>Sampaikan pengaduan Anda</p>
        </a>

        <a href="{{ route('tutorial.pengaduan') }}" class="card service-card">
            <div class="service-icon">📘</div>
            <h3>Tutorial Pengaduan</h3>
            <p>Panduan cara menyampaikan pengaduan</p>
        </a>

        <a href="{{ route('agenda') }}" class="card service-card">
            <div class="service-icon">📅</div>
            <h3>Agenda Kegiatan</h3>
            <p>Jadwal kegiatan desa mendatang</p>
        </a>

        <a href="{{ route('galeri') }}" class="card service-card">
            <div class="service-icon">🖼️</div>
            <h3>Galeri Kegiatan</h3>
            <p>Dokumentasi kegiatan desa</p>
        </a>

    </div>
</section>
@endsection