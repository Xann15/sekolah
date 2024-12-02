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
                'deskripsi' => 'anjay',
                'foto1' => 'rpl1.jpg',
                'foto2' => 'rpl2.jpg',
                'foto3' => 'rpl3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Akuntansi',
                'singkatan' => 'AK',
                'deskripsi' => 'anjay',
                'foto1' => 'ak1.jpg',
                'foto2' => 'ak2.jpg',
                'foto3' => 'ak3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Perhotelan',
                'singkatan' => 'PH',
                'deskripsi' => 'anjay',
                'foto1' => 'ph1.jpg',
                'foto2' => 'ph2.jpg',
                'foto3' => 'ph3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Administrasi Perkantoran',
                'singkatan' => 'ADP',
                'deskripsi' => 'anjay',
                'foto1' => 'adp1.jpg',
                'foto2' => 'adp2.jpg',
                'foto3' => 'adp3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
