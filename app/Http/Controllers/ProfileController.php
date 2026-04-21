<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function struktur()
    {
        $pengurus = [
            // PIMPINAN TERTINGGI
            ['nama' => 'gatau siapa kepalanya nanti', 'jabatan' => 'Kepala Desa', 'foto' => 'kades.jpg', 'kategori' => 'pimpinan'],

            // SEKRETARIAT (STAF)
            ['nama' => '(nama)', 'jabatan' => 'Sekretaris Desa', 'foto' => 'sekdes.jpg', 'kategori' => 'sekretariat'],
            ['nama' => '(nama)', 'jabatan' => 'Kaur Keuangan', 'foto' => 'kaur_keu.jpg', 'kategori' => 'sekretariat'],
            ['nama' => '(nama)', 'jabatan' => 'Kaur Tata Usaha & Umum', 'foto' => 'kaur_umum.jpg', 'kategori' => 'sekretariat'],
            ['nama' => '(nama)', 'jabatan' => 'Kaur Perencanaan', 'foto' => 'kaur_perencanaan.jpg', 'kategori' => 'sekretariat'],

            // PELAKSANA TEKNIS (KASI)
            ['nama' => '(nama)', 'jabatan' => 'Kasi Pemerintahan', 'foto' => 'kasi_pem.jpg', 'kategori' => 'teknis'],
            ['nama' => '(nama)', 'jabatan' => 'Kasi Kesejahteraan', 'foto' => 'kasi_kesra.jpg', 'kategori' => 'teknis'],
            ['nama' => '(nama)', 'jabatan' => 'Kasi Pelayanan', 'foto' => 'kasi_pelayanan.jpg', 'kategori' => 'teknis'],

            // PELAKSANA KEWILAYAHAN (KADUS)
            ['nama' => '(nama)', 'jabatan' => 'Kepala Dusun I', 'foto' => 'kadus1.jpg', 'kategori' => 'wilayah'],
            ['nama' => '(nama)', 'jabatan' => 'Kepala Dusun II', 'foto' => 'kadus2.jpg', 'kategori' => 'wilayah'],
        ];

        return view('pages.struktur', compact('pengurus'));
    }
}