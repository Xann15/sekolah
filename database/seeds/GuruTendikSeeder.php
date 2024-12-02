<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruTendikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurutendik')->insert([
            [
                'nama' => 'Marcus Aurelius',
                'jabatan' => 'Guru Mata Pelajaran Filsafat Berfikir',
                'foto' => 'GTK-marcus.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Socrates',
                'jabatan' => 'Guru Mata Pelajaran Etika Kesusilaan',
                'foto' => 'GTK-socrates.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Plato',
                'jabatan' => 'Guru Mata Pelajaran Filsafat Kuno',
                'foto' => 'GTK-plato.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Aristoteles',
                'jabatan' => 'Guru Mata Pelajaran Filsafat Kuno',
                'foto' => 'GTK-aristoteles.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Guru 5',
                'jabatan' => 'Jabatan 5',
                'foto' => 'GTK-_DSC1881.JPG',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Guru 6',
                'jabatan' => 'Jabatan 6',
                'foto' => 'GTK-_DSC1881.JPG',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Guru 7',
                'jabatan' => 'Jabatan 7',
                'foto' => 'GTK-_DSC1881.JPG',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Guru 8',
                'jabatan' => 'Jabatan 8',
                'foto' => 'GTK-_DSC1881.JPG',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
