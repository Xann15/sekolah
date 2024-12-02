<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileMadrasahSeeder extends Seeder
{
    public function run()
    {
        DB::table('profile_madrasah')->insert([
            [
                'nama' => 'SMK Satubangsa Harmoni',
                'deskripsi' => 'Sekolah Satu Bangsa Harmoni adalah Lembaga Pendidikan formal yang berada di bawah naungan Yayasan Satubangsa Harmoni Baru. Sekolah ini sebelumnya di kenal dengan nama Sekolah Harmoni dan beralih menjadi Sekolah Satu Bangsa Harmoni. Sekolah Satu Bangsa Harmoni memiliki jenjang pendidikan dari tingkat KB, TK, SD, SMP, dan SMK serta beralamat di Kelurahan Bengkong Laut, Kecamatan Bengkong. Sekolah ini menyediakan pendidikan sesuai dengan visi masing-masing unit sekolah.',
                'gambar' => 'bg.jpg',
                'logo' => 'logo.png',
                'jumlah_guru' => 11,
                'jumlah_siswa' => 185,
                'jumlah_jurusan' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
