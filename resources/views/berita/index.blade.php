@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <h1>Berita Desa</h1>
        <p>Daftar berita terbaru Desa Sejahtera</p>
    </div>
</section>

<section class="container section-space">

    <a href="{{ url()->previous() }}" class="btn-back">← Kembali</a>

    <div class="news-list">

        <div class="news-list-item">
            <img src="{{ asset('img/berita1.jpg') }}">
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
            <img src="{{ asset('img/berita2.jpg') }}">
            <div>
                <div class="meta">
                    <span class="badge">Pemerintahan</span>
                    <small>25 Mar 2026</small>
                </div>
                <h4>Musyawarah Desa Membahas Program 2026</h4>
                <p>Seluruh warga desa berkumpul untuk membahas program-program prioritas tahun 2026.</p>
            </div>
        </div>

    </div>

</section>
@endsection