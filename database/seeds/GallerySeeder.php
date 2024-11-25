<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery')->insert([
            [
                'gambar' => 'GL-000001.jpg',
                'diposting_oleh' => 'panjie',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gambar' => 'GL-000002.jpg',
                'diposting_oleh' => 'panjie',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gambar' => 'GL-000003.jpg',
                'diposting_oleh' => 'panjie',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gambar' => 'GL-000004.jpg',
                'diposting_oleh' => 'panjie',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gambar' => 'GL-000005.jpg',
                'diposting_oleh' => 'panjie',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gambar' => 'GL-000006.jpg',
                'diposting_oleh' => 'panjie',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'gambar' => 'GL-000007.jpg',
                'diposting_oleh' => 'panjie',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
