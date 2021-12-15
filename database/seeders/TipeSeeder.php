<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipe;

class TipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tipe::create([
            'nama' => 'Respirasi',
            'image' => 'images/Diagnosa_IconRespirasi.png'
        ]);

        Tipe::create([
            'nama' => 'Rasa Nyaman',
            'image' => 'images/Diagnosa_IconRasaNyaman.png'
        ]);

        Tipe::create([
            'nama' => 'Aktivitas dan Istirahat',
            'image' => 'images/Diagnosa_IconAktivitas.png'
        ]);

        Tipe::create([
            'nama' => 'Nutrisi dan Cairan',
            'image' => 'images/Diagnosa_IconNutrisi.png'
        ]);

        Tipe::create([
            'nama' => 'Keamanan dan Proteksi',
            'image' => 'images/Diagnosa_IconKeamanandanProteksi.png'
        ]);

        Tipe::create([
            'nama' => 'Sirkulasi',
            'image' => 'images/Diagnosa_IconSirkulasi.png'
        ]);

        Tipe::create([
            'nama' => 'Eliminasi',
            'image' => 'images/Diagnosa_IconEliminasi.png'
        ]);

        Tipe::create([
            'nama' => 'Perilaku',
            'image' => 'images/Diagnosa_IconPrilaku.png'
        ]);
    }
}
