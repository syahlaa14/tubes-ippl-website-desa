@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <h1>Profil Desa</h1>
        <p>Informasi lengkap tentang Desa Sejahtera</p>
    </div>
</section>

<section class="container section-space">
    <div class="two-grid">
        <div class="card">
            <h3>Identitas Desa</h3>
            <p class="muted">Informasi dasar tentang desa</p>
            <div class="vertical-info">
                <div><span>Nama Desa</span><strong>Desa Sejahtera</strong></div>
                <div><span>Kecamatan</span><strong>Sukamaju</strong></div>
                <div><span>Kabupaten</span><strong>Bogor</strong></div>
                <div><span>Provinsi</span><strong>Jawa Barat</strong></div>
                <div><span>Kode Pos</span><strong>16610</strong></div>
            </div>
        </div>

        <div class="card">
            <h3>Alamat & Kontak</h3>
            <p class="muted">Informasi kontak kantor desa</p>
            <div class="vertical-info">
                <div><span>Alamat Lengkap</span><strong>Jl. Desa Sejahtera No. 1, Kampung Mekar, Desa Sejahtera, Kec. Sukamaju, Kabupaten Bogor, Jawa Barat 16610</strong></div>
                <div><span>Email</span><strong>info@desasejahtera.id</strong></div>
                <div><span>Telepon</span><strong>(021) 1234-5678</strong></div>
            </div>
        </div>
    </div>
</section>
@endsection