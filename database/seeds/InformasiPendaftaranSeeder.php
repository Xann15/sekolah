<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformasiPendaftaranSeeder extends Seeder
{
    public function run()
    {
        DB::table('informasi_pendaftaran')->insert([
            [
                'gambar' => 'bg.jpg',
                'status' => 1,
                'deskripsi' => 'Selamat datang di Sekolah Satubangsa Harmoni Batam! Kami membuka pendaftaran untuk calon siswa baru tahun ajaran 2024/2025. Berikut adalah informasi penting terkait proses pendaftaran',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
