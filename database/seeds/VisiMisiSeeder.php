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
                'visimisi' => '<h3 style="color: rgb(68, 68, 68); background-color: rgb(249, 249, 250);">Visi</h3><p style="color: rgb(68, 68, 68); background-color: rgb(249, 249, 250);">Menghasilkan Lulusan yang Berakhlak Mulia, Berkarakter Unggul, Profesional, Mandiri, serta Berwawasan Lingkungan dan Budaya.</p><h3 style="color: rgb(68, 68, 68); background-color: rgb(249, 249, 250);">Misi</h3><ol style="margin-bottom: 1rem; color: rgb(68, 68, 68); background-color: rgb(249, 249, 250);"><li>Menyelenggarakan Kegiatan Pendampingan Keagamaan untuk peningkatan ketaqwaan sesuai dengan agama masing-masing.</li><li>Menumbuhkembangkan penghayatan terhadap ajaran agama yang dianut dan juga budaya bangsa sehingga menjadi sumber kearifan dalam berfikir, berkata dan bertindak.</li><li>Mengembangkan kedisiplinan yang dinamis dan partisipatif untuk mewujudkan kondisi lingkungan sekolah yang bersih, sehat, aman dan lestari.</li><li>Memberikan pendidikan dan pelatihan ketrampilan/kompetensi sesuai dengan tuntutan dunia usaha/industri (DU/DI).</li><li>Menumbuhkembangkan semangat jiwa wirausaha mandiri dan mampu bersaing di Dunia Usaha/Industri (DU/DI).</li><li>Menyelenggarakan Pendidikan yang dapat diminati masyarakat sesuai dengan kebutuhan masyarakat.</li><li>y</li></ol>',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
