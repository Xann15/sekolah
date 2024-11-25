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
                'nama' => 'Guru 1',
                'jabatan' => 'Jabatan 1',
                'foto' => 'GTK-_DSC1881.JPG',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Guru 2',
                'jabatan' => 'Jabatan 2',
                'foto' => 'GTK-_DSC1881.JPG',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Guru 3',
                'jabatan' => 'Jabatan 3',
                'foto' => 'GTK-_DSC1881.JPG',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Guru 4',
                'jabatan' => 'Jabatan 4',
                'foto' => 'GTK-_DSC1881.JPG',
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
