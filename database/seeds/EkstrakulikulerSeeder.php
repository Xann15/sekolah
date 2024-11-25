<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkstrakulikulerSeeder extends Seeder
{
    public function run()
    {
        DB::table('ekstrakulikuler')->insert([
            [
                'nama' => 'Futsal',
                'deskripsi' => 'Ekstrakurikuler futsal melatih teknik, strategi, dan sportivitas siswa. Dengan latihan rutin dan bimbingan pelatih, tim aktif berlaga di kompetisi. Kegiatan ini membangun karakter, kerjasama, dan semangat juang.',
                'foto' => 'futsal.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Badminton',
                'deskripsi' => 'Ekstrakurikuler badminton melatih teknik dasar, stamina, dan ketangkasan. Dengan bimbingan pelatih, siswa diasah untuk kompetisi dan membangun semangat sportivitas, disiplin, serta prestasi.',
                'foto' => 'badmin.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'VollyBall',
                'deskripsi' => 'Ekstrakurikuler voli melatih teknik passing, smash, dan teamwork. Dengan bimbingan pelatih, siswa diajak bermain penuh semangat untuk kompetisi dan membangun sportivitas.',
                'foto' => 'volly.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Tari',
                'deskripsi' => 'Ekstrakurikuler tari mengajarkan gerakan seni tradisional dan modern. Melalui latihan rutin, siswa diajak mengekspresikan diri, melestarikan budaya, serta tampil dalam acara sekolah dan lomba.',
                'foto' => 'tari.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'MMA',
                'deskripsi' => 'Ekstrakurikuler MMA melatih teknik bela diri, kekuatan, dan fokus. Kegiatan ini membangun disiplin, keberanian, dan mental juara. Terbuka bagi siswa pemula maupun yang berpengalaman.',
                'foto' => 'mma.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
