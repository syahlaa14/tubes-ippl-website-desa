@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container hero-grid">
        <div>
            <h1>Selamat Datang di <span>Desa Sejahtera</span></h1>
            <p>
                Portal resmi Desa Sejahtera untuk memberikan informasi dan layanan terbaik
                kepada seluruh masyarakat desa.
            </p>
            <div class="hero-actions">
                <a href="{{ route('struktur.organisasi') }}" class="btn btn-primary px-4 py-2 rounded-pill shadow">Lihat Struktural Organisasi Desa</a>
            </div>
        </div>

        <div>
            <img src="{{ asset('img/desa.jpg') }}" alt="Desa" class="hero-image">
        </div>
    </div>
</section>

<section class="stats-section">
    <div class="container stats-grid">
        <div class="card stat-card">
            <div class="stat-top">
                <span class="stat-icon">👥</span>
                <span class="growth">+2.5%</span>
            </div>
            <h3>5,234</h3>
            <p>Total Penduduk</p>
        </div>

        <div class="card stat-card">
            <div class="stat-top">
                <span class="stat-icon">👨‍👩‍👧</span>
                <span class="growth">+1.2%</span>
            </div>
            <h3>1,456</h3>
            <p>Kepala Keluarga</p>
        </div>

        <div class="card stat-card">
            <div class="stat-top">
                <span class="stat-icon">📰</span>
                <span class="growth">+8</span>
            </div>
            <h3>24</h3>
            <p>Berita Bulan Ini</p>
        </div>

        <div class="card stat-card">
            <div class="stat-top">
                <span class="stat-icon">📈</span>
                <span class="growth">+5%</span>
            </div>
            <h3>89%</h3>
            <p>Pengaduan Selesai</p>
        </div>
    </div>
</section>

<section class="container section-space">
    <div class="card profile-card">
        <div class="section-title">
            <h2>Profil Singkat Desa</h2>
            <p>Informasi umum tentang Desa Sejahtera</p>
        </div>

        <div class="profile-grid">
            <div>
                <h3>Tentang Desa</h3>
                <p>
                    Desa Sejahtera adalah sebuah desa yang terletak di wilayah yang subur
                    dengan mayoritas masyarakat bekerja di sektor pertanian. Desa ini memiliki
                    potensi besar dalam pengembangan ekonomi masyarakat dan pariwisata desa.
                </p>
                <a href="{{ route('profile') }}" class="btn btn-light">Lihat Selengkapnya</a>
            </div>

            <div class="info-table">
                <div><span>Nama Desa</span><strong>Desa Sejahtera</strong></div>
                <div><span>Kecamatan</span><strong>Sukamaju</strong></div>
                <div><span>Kabupaten</span><strong>Bogor</strong></div>
                <div><span>Provinsi</span><strong>Jawa Barat</strong></div>
                <div><span>Kode Pos</span><strong>16610</strong></div>
            </div>
        </div>
    </div>
</section>

<section class="container section-space">
    <div class="center-head">
        <h2>Layanan Desa</h2>
        <p>Berbagai layanan yang tersedia untuk memudahkan akses informasi dan pelayanan kepada masyarakat</p>
    </div>

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

<section class="container section-space">
    <div class="section-row">
        <div>
            <h2>Berita Terkini</h2>
            <p>Update berita dan kegiatan desa</p>
        </div>
        <a href="{{ route('informasi') }}" class="btn btn-light">Lihat Semua</a>
    </div>

    <div class="news-grid">
        <div class="card news-card">
            <img src="{{ asset('img/berita1.jpg') }}" alt="Berita 1">
            <div class="news-body">
                <small>28 Mar 2026</small>
                <h3>Pembangunan Jalan Desa Dimulai</h3>
                <p>Proyek pembangunan jalan desa sepanjang 2 km telah dimulai dengan target selesai dalam 3 bulan.</p>
                <a href="{{ route('informasi') }}">Baca Selengkapnya →</a>
            </div>
        </div>

        <div class="card news-card">
            <img src="{{ asset('img/berita2.jpg') }}" alt="Berita 2">
            <div class="news-body">
                <small>25 Mar 2026</small>
                <h3>Musyawarah Desa Membahas Program 2026</h3>
                <p>Seluruh warga desa berkumpul untuk membahas program-program prioritas tahun 2026.</p>
                <a href="{{ route('informasi') }}">Baca Selengkapnya →</a>
            </div>
        </div>

        <div class="card news-card">
            <img src="{{ asset('img/berita3.jpg') }}" alt="Berita 3">
            <div class="news-body">
                <small>20 Mar 2026</small>
                <h3>Perayaan Hari Kemerdekaan Desa</h3>
                <p>Berbagai lomba dan kegiatan meriah diselenggarakan untuk memperingati hari kemerdekaan.</p>
                <a href="{{ route('informasi') }}">Baca Selengkapnya →</a>
            </div>
        </div>
    </div>
</section>

<section class="tutorial-section">
    <div class="container">
        <div class="card tutorial-box">
            <h2>Tutorial Cara Pengaduan</h2>
            <p>Pelajari cara menyampaikan pengaduan, kritik, dan saran dengan mudah melalui portal desa kami.</p>

            <ol class="steps">
                <li>Klik menu "Layanan" atau "Pengaduan" di navigasi atas</li>
                <li>Isi formulir pengaduan dengan lengkap dan jelas</li>
                <li>Submit pengaduan dan dapatkan nomor tracking</li>
                <li>Pantau status pengaduan Anda secara berkala</li>
            </ol>

            <a href="{{ route('layanan') }}" class="btn btn-primary">Buat Pengaduan Sekarang</a>
        </div>
    </div>
</section>
@endsection