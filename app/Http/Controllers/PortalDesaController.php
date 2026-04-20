<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PortalDesaController extends Controller
{
    public function home(): View
    {
        $stats = [
            ['icon' => '👥', 'value' => '5,234', 'label' => 'Total Penduduk', 'growth' => '+2.5%'],
            ['icon' => '👨‍👩‍👧', 'value' => '1,456', 'label' => 'Kepala Keluarga', 'growth' => '+1.2%'],
            ['icon' => '📰', 'value' => '24', 'label' => 'Berita Bulan Ini', 'growth' => '+8'],
            ['icon' => '📈', 'value' => '89%', 'label' => 'Pengaduan Selesai', 'growth' => '+5%'],
        ];

        $services = [
            ['title' => 'Data Penduduk', 'desc' => 'Lihat statistik dan informasi penduduk desa'],
            ['title' => 'Berita Desa', 'desc' => 'Berita terkini seputar desa'],
            ['title' => 'Pengaduan', 'desc' => 'Sampaikan pengaduan Anda'],
            ['title' => 'Tutorial Pengaduan', 'desc' => 'Panduan cara menyampaikan pengaduan'],
            ['title' => 'Agenda Kegiatan', 'desc' => 'Jadwal kegiatan desa mendatang'],
            ['title' => 'Galeri Kegiatan', 'desc' => 'Dokumentasi kegiatan desa'],
        ];

        $news = [
            [
                'date' => '28 Mar 2026',
                'title' => 'Pembangunan Jalan Desa Dimulai',
                'desc' => 'Proyek pembangunan jalan desa sepanjang 2 km telah dimulai dengan target selesai dalam 3 bulan.',
                'image' => 'https://images.unsplash.com/photo-1460317442991-0ec209397118?q=80&w=1200&auto=format&fit=crop',
            ],
            [
                'date' => '25 Mar 2026',
                'title' => 'Musyawarah Desa Membahas Program 2026',
                'desc' => 'Seluruh warga desa berkumpul untuk membahas program-program prioritas tahun 2026.',
                'image' => 'https://images.unsplash.com/photo-1515169067868-5387ec356754?q=80&w=1200&auto=format&fit=crop',
            ],
            [
                'date' => '20 Mar 2026',
                'title' => 'Perayaan Hari Kemerdekaan Desa',
                'desc' => 'Berbagai lomba dan kegiatan meriah diselenggarakan untuk memperingati hari kemerdekaan.',
                'image' => 'https://images.unsplash.com/photo-1516280440614-37939bbacd81?q=80&w=1200&auto=format&fit=crop',
            ],
        ];

        return view('pages.home', compact('stats', 'services', 'news'));
    }

    public function profile(): View
    {
        $structure = [
            ['jabatan' => 'Kepala Desa', 'nama' => 'Budi Santoso, S.Sos'],
            ['jabatan' => 'Sekretaris Desa', 'nama' => 'Siti Nurhaliza, S.AP'],
            ['jabatan' => 'Kaur Pemerintahan', 'nama' => 'Ahmad Fauzi, S.H'],
            ['jabatan' => 'Kaur Pembangunan', 'nama' => 'Rudi Hartono, S.T'],
            ['jabatan' => 'Kaur Keuangan', 'nama' => 'Dewi Lestari, S.E'],
            ['jabatan' => 'Kaur Kesejahteraan', 'nama' => 'Rina Kusuma, S.Sos'],
            ['jabatan' => 'Kepala Dusun I', 'nama' => 'Bambang Wijaya'],
            ['jabatan' => 'Kepala Dusun II', 'nama' => 'Hendra Gunawan'],
            ['jabatan' => 'Kepala Dusun III', 'nama' => 'Suryanto'],
        ];

        return view('pages.profile', compact('structure'));
    }

    public function information(): View
    {
        $news = [
            [
                'category' => 'Pembangunan',
                'date' => '28 Mar 2026',
                'title' => 'Pembangunan Jalan Desa Dimulai',
                'desc' => 'Proyek pembangunan jalan desa sepanjang 2 km telah dimulai dengan target selesai dalam 3 bulan.',
                'image' => 'https://images.unsplash.com/photo-1460317442991-0ec209397118?q=80&w=1200&auto=format&fit=crop',
            ],
            [
                'category' => 'Pemerintahan',
                'date' => '25 Mar 2026',
                'title' => 'Musyawarah Desa Membahas Program 2026',
                'desc' => 'Seluruh warga desa berkumpul untuk membahas program-program prioritas tahun 2026. Musyawarah berlangsung dengan meriah dan partisipatif.',
                'image' => 'https://images.unsplash.com/photo-1515169067868-5387ec356754?q=80&w=1200&auto=format&fit=crop',
            ],
            [
                'category' => 'Sosial Budaya',
                'date' => '20 Mar 2026',
                'title' => 'Perayaan Hari Kemerdekaan Desa',
                'desc' => 'Berbagai lomba dan kegiatan meriah diselenggarakan untuk memperingati hari kemerdekaan.',
                'image' => 'https://images.unsplash.com/photo-1516280440614-37939bbacd81?q=80&w=1200&auto=format&fit=crop',
            ],
            [
                'category' => 'Kesehatan',
                'date' => '15 Mar 2026',
                'title' => 'Posyandu Mendapat Bantuan Peralatan Baru',
                'desc' => 'Posyandu desa menerima bantuan peralatan kesehatan baru dari pemerintah kabupaten.',
                'image' => 'https://images.unsplash.com/photo-1516574187841-cb9cc2ca948b?q=80&w=1200&auto=format&fit=crop',
            ],
        ];

        return view('pages.information', compact('news'));
    }

    public function service(): View
    {
        return view('pages.service');
    }
}