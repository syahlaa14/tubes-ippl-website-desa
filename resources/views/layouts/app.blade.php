<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Sejahtera</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="navbar">
        <div class="container nav-wrap">
            <a href="{{ route('home') }}" class="brand">
                <div class="brand-icon">⌂</div>
                <div>
                    <div class="brand-title">Desa Sejahtera</div>
                    <div class="brand-subtitle">Portal Resmi Desa</div>
                </div>
            </a>

            <nav class="menu">
                <a href="{{ route('home') }}" class="menu-link {{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                <a href="{{ route('profile') }}" class="menu-link {{ request()->routeIs('profile') ? 'active' : '' }}">Profile Desa</a>
                <a href="{{ route('informasi') }}" class="menu-link {{ request()->routeIs('informasi') ? 'active' : '' }}">Informasi</a>
                <a href="{{ route('layanan') }}" class="menu-link {{ request()->routeIs('layanan') ? 'active' : '' }}">Layanan</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container footer-grid">
            <div>
                <h3>Desa Sejahtera</h3>
                <p>Portal resmi Desa Sejahtera untuk memberikan informasi dan layanan kepada masyarakat.</p>
            </div>
            <div>
                <h3>Kontak</h3>
                <p>Email: info@desasejahtera.id</p>
                <p>Telp: (021) 1234-5678</p>
                <p>Alamat: Jl. Desa Sejahtera No. 1</p>
            </div>
            <div>
                <h3>Jam Layanan</h3>
                <p>Senin - Jumat: 08:00 - 16:00</p>
                <p>Sabtu: 08:00 - 12:00</p>
                <p>Minggu & Tanggal Merah: Tutup</p>
            </div>
        </div>
        <div class="container footer-copy">
            © 2026 Desa Sejahtera. All rights reserved.
        </div>
    </footer>
</body>
</html>