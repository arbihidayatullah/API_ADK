<?php

namespace Database\Seeders;

use App\Models\Uraian;
use Illuminate\Database\Seeder;

class UraianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Uraian::create([
            'nama' => 'Identifikasi Kemampuan batuk',
            'intervensi_id' => '1'
        ]);
        Uraian::create([
            'nama' => 'Monitor adanya retensi sputum',
            'intervensi_id' => '1'
        ]);
        Uraian::create([
            'nama' => 'Monitor tanda dan gejala infeksi saluran napas',
            'intervensi_id' => '1'
        ]);
        Uraian::create([
            'nama' => 'Atur posisi semi Fowler atau Fowler',
            'intervensi_id' => '1'
        ]);
        Uraian::create([
            'nama' => 'Jelaskan tujuan dan prosedur batuk efektif',
            'intervensi_id' => '1'
        ]);
        Uraian::create([
            'nama' => 'Pasang perlak dan bengkok di pangkuan pasien',
            'intervensi_id' => '1'
        ]);
        Uraian::create([
            'nama' => 'Anjurkan tarik napas dalam melalui hidung selama 4 detik, ditahan  selama 2 detik, kemudian dikeluarkan dari mulut dengan bibir mencucu (dibulatkan) selama 8 detik',
            'intervensi_id' => '1'
        ]);
        Uraian::create([
            'nama' => 'Anjurkan mengurangi tarik napas dalam selama 3 kali',
            'intervensi_id' => '1'
        ]);
        Uraian::create([
            'nama' => 'Anjurkan batuk dengan kuat langsung setelah tarik napas dalam yang ketiga',
            'intervensi_id' => '1'
        ]);
        Uraian::create([
            'nama' => 'Buang sekret pada tempat sputum',
            'intervensi_id' => '1'
        ]);
        Uraian::create([
            'nama' => 'Kolaborasi untuk pemberian Mukolitik atau ekspektoran jika perlu',
            'intervensi_id' => '1'
        ]);


        Uraian::create([
            'nama' => 'Monitor Pola napas (frekuensi, kedalaman dan usaha napas)',
            'intervensi_id' => '2'
        ]);
        Uraian::create([
            'nama' => 'Monitor bunyi napas tambahan (grugling, mengi/wheezing, ronkhi kering)',
            'intervensi_id' => '2'
        ]);
        Uraian::create([
            'nama' => 'Monitor sputum (jumlah, warna, aroma)',
            'intervensi_id' => '2'
        ]);
        Uraian::create([
            'nama' => 'Pertahankan kepatenan jalan napas dengan head-tilt dan chin-lift (Jaw-thrust jika curiga thrauma servikal)',
            'intervensi_id' => '2'
        ]);
        Uraian::create([
            'nama' => 'Posisikan semi Fowle atau Fowler',
            'intervensi_id' => '2'
        ]);
        Uraian::create([
            'nama' => 'Berikan minum hangat',
            'intervensi_id' => '2'
        ]);
        Uraian::create([
            'nama' => 'Lakukan Fisioterapi dada jika perlu',
            'intervensi_id' => '2'
        ]);
        Uraian::create([
            'nama' => 'Lakukan penghisapan lendir kurang dari15 detik',
            'intervensi_id' => '2'
        ]);
        Uraian::create([
            'nama' => 'Lakukan hiperoksigenasi sebelum penghisapan endotrakheal',
            'intervensi_id' => '2'
        ]);
        Uraian::create([
            'nama' => 'Keluarkan sumbatan benda padat dengan forsep McGill',
            'intervensi_id' => '2'
        ]);
        Uraian::create([
            'nama' => 'Berikan Oksigen, jika perlu',
            'intervensi_id' => '2'
        ]);
        Uraian::create([
            'nama' => 'Anjurkan asupan cairan 2000 ml/hari, jika tidak ada kontraindikasi',
            'intervensi_id' => '2'
        ]);
        Uraian::create([
            'nama' => 'Ajarkan teknik batuk efektif',
            'intervensi_id' => '2'
        ]);
        Uraian::create([
            'nama' => 'Kolaborasi pemberian bronkodilator, ekspektoran, mukolitik,  jika perlu',
            'intervensi_id' => '2'
        ]);
    }
}
