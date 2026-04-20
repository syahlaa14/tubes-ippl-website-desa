@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <h1>Informasi</h1>
        <p>Berita, agenda, dan galeri kegiatan desa</p>
    </div>
</section>

<section class="container section-space">
    <div class="tabs">
        <button class="tab active">Berita Desa</button>
        <button class="tab">Agenda Kegiatan</button>
        <button class="tab">Galeri</button>
    </div>

    <div class="info-layout">
        <div class="card">
            <h3>Berita Terbaru</h3>
            <p class="muted">Berita dan informasi terkini dari Desa Sejahtera</p>

            <div class="news-list">
                <div class="news-list-item selected">
                    <img src="{{ asset('img/berita1.jpg') }}" alt="Berita 1">
                    <div>
                        <div class="meta">
                            <span class="badge">Pembangunan</span>
                            <small>28 Mar 2026</small>
                        </div>
                        <h4>Pembangunan Jalan Desa Dimulai</h4>
                        <p>Proyek pembangunan jalan desa sepanjang 2 km telah dimulai dengan target selesai dalam 3 bulan.</p>
                    </div>
                </div>

                <div class="news-list-item">
                    <img src="{{ asset('img/berita2.jpg') }}" alt="Berita 2">
                    <div>
                        <div class="meta">
                            <span class="badge">Pemerintahan</span>
                            <small>25 Mar 2026</small>
                        </div>
                        <h4>Musyawarah Desa Membahas Program 2026</h4>
                        <p>Seluruh warga desa berkumpul untuk membahas program-program prioritas tahun 2026.</p>
                    </div>
                </div>

                <div class="news-list-item">
                    <img src="{{ asset('img/berita3.jpg') }}" alt="Berita 3">
                    <div>
                        <div class="meta">
                            <span class="badge">Sosial Budaya</span>
                            <small>20 Mar 2026</small>
                        </div>
                        <h4>Perayaan Hari Kemerdekaan Desa</h4>
                        <p>Berbagai lomba dan kegiatan meriah diselenggarakan untuk memperingati hari kemerdekaan.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card sticky-card">
            <img src="{{ asset('img/berita1.jpg') }}" alt="Detail Berita" class="detail-image">
            <div class="meta">
                <span class="badge">Pembangunan</span>
                <small>28 Mar 2026</small>
            </div>
            <h3>Pembangunan Jalan Desa Dimulai</h3>
            <p>
                Proyek pembangunan jalan desa sepanjang 2 km telah dimulai dengan target selesai dalam 3 bulan.
                Pembangunan ini diharapkan dapat memperlancar akses transportasi warga.
            </p>
        </div>
    </div>
</section>
@endsection