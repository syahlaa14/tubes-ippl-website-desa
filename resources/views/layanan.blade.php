@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <h1>Layanan Desa</h1>
        <p>Layanan informasi dan pengaduan untuk masyarakat</p>
    </div>
</section>

<section class="container section-space">
    <div class="two-grid">
        <div class="card service-detail">
            <div class="service-icon large">👥</div>
            <h3>Data Penduduk</h3>
            <p>
                Lihat statistik dan informasi lengkap tentang penduduk desa, termasuk demografi,
                mata pencaharian, dan sebaran wilayah.
            </p>
            <div class="feature-list two-col">
                <span>• Statistik Penduduk</span>
                <span>• Demografi</span>
                <span>• Mata Pencaharian</span>
                <span>• Sebaran Wilayah</span>
            </div>
            <a href="#" class="btn btn-primary full">Akses Layanan</a>
        </div>

        <div class="card service-detail">
            <div class="service-icon large">💬</div>
            <h3>Pengaduan Masyarakat</h3>
            <p>
                Sampaikan pengaduan, kritik, dan saran Anda kepada pemerintah desa.
                Kami siap mendengar dan menindaklanjuti.
            </p>
            <div class="feature-list two-col">
                <span>• Form Pengaduan</span>
                <span>• Tracking Status</span>
                <span>• Kritik & Saran</span>
                <span>• Respon Cepat</span>
            </div>
            <a href="#" class="btn btn-primary full">Akses Layanan</a>
        </div>
    </div>
</section>
@endsection