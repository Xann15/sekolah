<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert([
            [
                'nama' => 'Rekayasa Perangkat Lunak',
                'singkatan' => 'RPL',
                'deskripsi' => 'Jurusan Rekayasa Perangkat Lunak (RPL) mempersiapkan siswa untuk menguasai keterampilan dalam merancang, mengembangkan, dan memelihara perangkat lunak. Siswa akan belajar tentang bahasa pemrograman, desain sistem, pengembangan aplikasi web dan mobile, serta manajemen proyek IT. Dengan perkembangan teknologi yang pesat, lulusan RPL siap untuk bekerja di industri teknologi informasi sebagai software developer, web developer, atau sistem analis, yang sangat dibutuhkan di berbagai sektor industri.',
                'foto1' => 'rpl1.jpg',
                'foto2' => 'rpl2.jpg',
                'foto3' => 'rpl3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Akuntansi',
                'singkatan' => 'AK',
                'deskripsi' => 'Jurusan Akuntansi memberikan pembelajaran tentang pencatatan keuangan, analisis laporan keuangan, hingga perpajakan. Siswa akan dibekali keterampilan dalam menggunakan perangkat lunak akuntansi, manajemen anggaran, dan penyusunan laporan keuangan sesuai standar. Lulusan Akuntansi memiliki peluang karier yang luas, seperti menjadi akuntan, auditor, atau staf keuangan di berbagai sektor, baik di perusahaan swasta, instansi pemerintah, maupun organisasi non-profit.  ',
                'foto1' => 'ak1.jpg',
                'foto2' => 'ak2.jpg',
                'foto3' => 'ak3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Perhotelan',
                'singkatan' => 'PH',
                'deskripsi' => 'Jurusan Perhotelan membekali siswa dengan pengetahuan tentang operasional hotel, layanan pelanggan, dan manajemen perhotelan. Materi yang diajarkan meliputi tata graha, pelayanan makanan dan minuman, serta pengelolaan acara. Siswa juga diajarkan etika kerja profesional dan bahasa asing untuk mendukung karier mereka. Lulusan Perhotelan memiliki peluang besar bekerja di industri pariwisata, seperti hotel, resort, kapal pesiar, atau restoran mewah.',
                'foto1' => 'ph1.jpg',
                'foto2' => 'ph2.jpg',
                'foto3' => 'ph3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Administrasi Perkantoran',
                'singkatan' => 'ADP',
                'deskripsi' => 'Jurusan Administrasi Perkantoran mempersiapkan siswa untuk mengelola aktivitas perkantoran modern. Mereka akan mempelajari manajemen dokumen, pengelolaan arsip, komunikasi bisnis, hingga penguasaan perangkat lunak perkantoran. Dengan keterampilan tersebut, lulusan dapat bekerja sebagai sekretaris, staf administrasi, atau manajer operasional di perusahaan nasional maupun multinasional, yang sangat dibutuhkan di dunia kerja saat ini.',
                'foto1' => 'adp1.jpg',
                'foto2' => 'adp2.jpg',
                'foto3' => 'adp3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
