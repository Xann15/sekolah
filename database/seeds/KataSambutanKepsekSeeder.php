<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KataSambutanKepsekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('katasambutankepsek')->insert([
            [
                'nama' => 'Dr. Vincentius, M.Ed.',
                'pesan' => 'Puji syukur kami panjatkan ke hadirat Tuhan Yang Maha Kuasa atas berkat dan karunia-Nya sehingga SMK Satubangsa Harmoni Batam berhasil menyelesaikan pembuatan website ini. Kehadiran website ini diharapkan dapat mempermudah dan memperlancar arus informasi mengenai sekolah kepada semua pihak yang terkait, termasuk orang tua, alumni, dan masyarakat umum. Dengan hadirnya website ini, kami berharap dapat memberikan informasi terkini tentang perkembangan dunia pendidikan di SMK Satubangsa Harmoni Batam. Semoga website ini dapat menjadi media yang bermanfaat bagi semua pihak. “Jangan pernah berhenti belajar karena hidup tidak pernah berhenti mengajarkan.” Terima kasih atas kerja sama dan dukungan yang diberikan untuk kemajuan pendidikan di sekolah ini. Semoga kita selalu dalam lindungan Tuhan. Sekian dan terima kasih.',
                'foto' => 'vincentius.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
