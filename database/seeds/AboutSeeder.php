<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            [
                'deskripsi' => 'SMK Satu Bangsa Harmoni adalah Lembaga Pendidikan formal yang menyelenggarakan pendidikan kejuruan. Sekolah ini memiliki empat jurusan yaitu, Akuntansi, Rekayasa Perangkat Lunak (RPL), Perhotelan, dan Administrasi Perkantoran. Perkembangan teknologi menuntut sekolah-sekolah di zaman sekarang untuk selalu meningkatkan sumber daya manusianya, tidak terkecuali dengan SMK Satu Bangsa Harmoni ini. SMK Satu Bangsa Harmoni akan selalu meningkatkan proses belajar mengajar agar tercapai lulusan siswa-siswi yang berkualitas, bermoral, berkompeten dan berakhlak mulia. Sekolah ini meningkatkan proses pembelajarannya menggunakan kurikulum standar nasional (Kurikulum 2013) dan didukung oleh guru-guru yang berpengalaman, terlatih, dan profesional dalam proses pembelajaran. Untuk menunjang semangat kelancaran proses pembelajaran bagi siswanya, SMK Satu Bangsa Harmoni ini dilengkapi beberapa fasilitas dan sarana prasarana yang memadai diantaranya: Lab Akuntansi, Lab Rekayasa Perangkat Lunak (RPL), Lab Perhotelan, Lab Adiministrasi Perkantoran, Perpustakaan, dan Kantin. Selain aktivitas belajar mengajar, SMK Satu Bangsa Harmoni juga mendukung kreativitas siswanya untuk berorganisasi dalam sekolah, diantaranya Organisasi Siswa Intra Sekolah (OSIS). Hal ini tentu saja agar siswa memiliki kemampuan untuk bersosialisasi dengan siswa lainnya serta pihak terkait agar tercipta pribadi yang memiliki mental yang baik dan tangguh. SMK Satu Bangsa Harmoni juga memberikan pembekalan dan pengalaman bermasyarakat, berorganisasi serta latihan kepemimpinan di luar akademis dengan beragam ekstrakurikuler, diantaranya:

Pramuka - siswa-siswi dapat terlatih dalam kedisiplinan, belajar menjadi pemimpin, bergotong royong, meningkatkan rasa kepedulian, dan belajar mencintai alam.
Olahraga - Ekstrakurikuler di bidang olahraga juga tersedia di SMK Satu Bangsa Harmoni, yang saat ini banyak diminati oleh siswa adalah Basket, Badminton, Bola Voli dan Futsal.
Kesenian - Ekstrakurikuler kesenian meliputi seni musik dan seni tari yang bertujuan untuk membantu mengembangkan peserta didik sesuai dengan kebutuhan, potensi, dan bakat mereka. edited2',
                'logo_sekolah' => 'logo-vertical.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
