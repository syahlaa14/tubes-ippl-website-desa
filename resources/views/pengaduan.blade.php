@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <h1>Pengaduan</h1>
        <p>Ajukan pengaduan Desa Sejahtera</p>
    </div>
</section>

<div class="form-container">
    {{-- <a href="{{ url()->previous() }}" class="btn-back">← Kembali</a> --}}
    <div class="form-title">Sampaikan Pengaduan Anda</div>

    <form action="" method="POST">
        @csrf

        <!-- Row 1 -->
        <div class="form-row">
            <div class="form-group">
                <label class="form-label">Nama Depan</label>
                <input type="text" name="nama_depan" class="form-control" placeholder="Nama depan">
            </div>

            <div class="form-group">
                <label class="form-label">Nama Belakang</label>
                <input type="text" name="nama_belakang" class="form-control" placeholder="Nama belakang">
            </div>
        </div>

        <!-- Row 2 -->
        <div class="form-row">
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan email">
            </div>

            <div class="form-group">
                <label class="form-label">No. HP</label>
                <input type="text" name="no_hp" class="form-control" placeholder="08xxxxxxxxxx">
            </div>
        </div>

        <!-- Dropdown -->
        <div class="form-group">
            <label class="form-label">Jenis Pengaduan</label>
            <select name="jenis" class="form-control">
                <option value="">Pilih jenis pengaduan</option>
                <option value="pelayanan">Pelayanan</option>
                <option value="infrastruktur">Infrastruktur</option>
                <option value="keamanan">Keamanan</option>
                <option value="lainnya">Lainnya</option>
            </select>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="form-label">Isi Pengaduan</label>
            <textarea name="isi" class="form-control form-textarea" placeholder="Tuliskan detail pengaduan Anda..."></textarea>
        </div>

        <!-- Button -->
        <button type="submit" class="btn-submit">
            Kirim →
        </button>
    </form>
</div>
@endsection