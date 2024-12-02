<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            [
                'alamat' => 'Jl. Bengkong Jaya No.1, Bengkong Laut, Kec. Bengkong, Kota Batam, Kepulauan Riau 29432',
                'email' => 'sekolah@gmail.com',
                'telpon' => '0123456789',
                'instagram' => '@instagram',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
