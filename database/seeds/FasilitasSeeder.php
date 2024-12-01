<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fasilitas')->insert([
            [
                'nama' => 'Aula',
                'foto' => 'aula.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Kantin',
                'foto' => 'kantin.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Lab Komputer',
                'foto' => 'lab-komputer.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Lapangan-FutsalBasket',
                'foto' => 'lapangan-futsalbasket.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Lapangan Volly',
                'foto' => 'lapangan-volly.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
