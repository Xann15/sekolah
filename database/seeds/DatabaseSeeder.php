<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AboutSeeder::class);
        $this->call(BeritaSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(EkstrakulikulerSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(GuruTendikSeeder::class);
        $this->call(InformasiPendaftaranSeeder::class);
        $this->call(KataSambutanKepsekSeeder::class);
        $this->call(ProfileMadrasahSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
