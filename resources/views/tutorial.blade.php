@extends('layouts.app')

@section('content')
<section class="page-hero">
    <div class="container">
        <h1>Tutorial Pengaduan</h1>
        <p>Tata Cara mengajukan pengaduan Desa Sejahtera</p>
    </div>
</section>

<style>
    body {
        background: #f5f7fb;
    }

    .tutorial-section {
        width: 100%;
        padding: 60px 260px;
        background: #f5f7fb;
    }

    .tutorial-title {
        font-size: 32px;
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 10px;
    }

    .tutorial-subtitle {
        color: #718096;
        margin-bottom: 40px;
    }

    .steps {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
    }

    .step-card {
        background: white;
        padding: 25px;
        border-radius: 16px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        transition: 0.2s;
    }

    .step-card:hover {
        transform: translateY(-5px);
    }

    .step-number {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #6366f1;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .step-title {
        font-weight: 600;
        margin-bottom: 8px;
        color: #2d3748;
    }

    .step-desc {
        color: #718096;
        font-size: 14px;
    }

    .cta-btn {
        margin-top: 40px;
        padding: 12px 28px;
        border-radius: 30px;
        border: none;
        background: #6366f1;
        color: white;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }

    .cta-btn:hover {
        background: #4f46e5;
    }

    @media (max-width: 768px) {
        .tutorial-section {
            padding: 40px 20px;
        }
    }
</style>

<div class="tutorial-section">
    {{-- <a href="{{ url()->previous() }}" class="btn-back">← Kembali</a> --}}
    <div class="tutorial-title">Tutorial Pengaduan</div>
    <div class="tutorial-subtitle">
        Ikuti langkah berikut untuk mengajukan pengaduan dengan mudah.
    </div>

    <div class="steps">

        <div class="step-card">
            <div class="step-number">1</div>
            <div class="step-title">Isi Data Diri</div>
            <div class="step-desc">
                Masukkan nama, email, dan nomor HP Anda dengan benar.
            </div>
        </div>

        <div class="step-card">
            <div class="step-number">2</div>
            <div class="step-title">Pilih Jenis Pengaduan</div>
            <div class="step-desc">
                Pilih kategori pengaduan sesuai dengan permasalahan Anda.
            </div>
        </div>

        <div class="step-card">
            <div class="step-number">3</div>
            <div class="step-title">Tulis Detail Pengaduan</div>
            <div class="step-desc">
                Jelaskan masalah secara singkat dan jelas agar mudah diproses.
            </div>
        </div>

        <div class="step-card">
            <div class="step-number">4</div>
            <div class="step-title">Kirim Pengaduan</div>
            <div class="step-desc">
                Klik tombol kirim dan tunggu respon dari pihak desa.
            </div>
        </div>

    </div>

    <a href="{{ url('/pengaduan') }}" class="cta-btn">
        Buat Pengaduan →
    </a>

</div>
@endsection