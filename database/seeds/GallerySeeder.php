<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    public function run()
    {
        DB::table('gallery')->insert([
            [
                'judul' => 'Pertandingan Vollyball SMK Satubangsa Harmoni VS SMK/A Kartini Batam',
                'foto' => 'FB-_DSC1811.jpg',
                'deskripsi' => 'Pertandingan ini merupakan pertandingan funmatch untuk saling melatih kemampuan dua belah pihak, dan juga sebagai penjalin saudaraan. Adapun peserta putra yang bertanding ialah: Adrian Gideon, Zhairil Zidan, Fharel Marino Pratama, Ibra Movid Syaputera, Abraham, Ruben, Raihan, Hanif, Muhammad Haikal.',
                'penulis' => 'Panji Ganteng',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Solana: Masa Depan Blockchain dengan Kecepatan Super dan Biaya Rendah',
                'foto' => 'FB-_DSC1810.jpg',
                'deskripsi' => 'Solana telah menjadi perbincangan hangat di dunia blockchain sebagai platform yang menawarkan transaksi cepat dan biaya yang sangat rendah. Dengan teknologi proof-of-history (PoH), Solana mampu memproses lebih dari 65.000 transaksi per detik, menjadikannya salah satu blockchain tercepat di dunia. Artikel ini membahas keunggulan Solana, proyek-proyek terkemuka yang dibangun di atasnya, serta potensinya dalam mengubah ekosistem kripto secara global.',
                'penulis' => 'Panji Nakamoto',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
