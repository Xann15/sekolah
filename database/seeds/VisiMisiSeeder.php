<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visimisi')->insert([
            [
                'visimisi' => 'Dr. Vincentius, M.Ed.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
