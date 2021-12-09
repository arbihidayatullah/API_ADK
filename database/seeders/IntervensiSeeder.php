<?php

namespace Database\Seeders;

use App\Models\Intervensi;
use Illuminate\Database\Seeder;

class IntervensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Intervensi::create([
            'nama' => 'Latihan batuk efektif (A)',
            'diagnosa_id' => '1'
        ]);
        Intervensi::create([
            'nama' => 'Manajemen jalan napas (B)',
            'diagnosa_id' => '1'
        ]);
        Intervensi::create([
            'nama' => 'Pemantauan respirasi',
            'diagnosa_id' => '1'
        ]);


        Intervensi::create([
            'nama' => 'Manajemen jalan napas',
            'diagnosa_id' => '2'
        ]);
        Intervensi::create([
            'nama' => 'Pemantauan respirasi',
            'diagnosa_id' => '2'
        ]);


        Intervensi::create([
            'nama' => 'Manajemen mual',
            'diagnosa_id' => '3'
        ]);
        Intervensi::create([
            'nama' => 'Manajemen muntah',
            'diagnosa_id' => '3'
        ]);


        Intervensi::create([
            'nama' => 'Manajemen Nyeri',
            'diagnosa_id' => '4'
        ]);
        Intervensi::create([
            'nama' => 'Pemberian analgesik',
            'diagnosa_id' => '4'
        ]);


        Intervensi::create([
            'nama' => 'Manajemen nyeri persalinan',
            'diagnosa_id' => '5'
        ]);
        Intervensi::create([
            'nama' => 'Pengaturan posisi',
            'diagnosa_id' => '5'
        ]);
        Intervensi::create([
            'nama' => 'Terapi relaksasi',
            'diagnosa_id' => '5'
        ]);


        Intervensi::create([
            'nama' => 'Perawatan pasca persalinan',
            'diagnosa_id' => '6'
        ]);
        Intervensi::create([
            'nama' => 'Manajemen nyeri persalinan',
            'diagnosa_id' => '6'
        ]);


        Intervensi::create([
            'nama' => 'Manajemen energi',
            'diagnosa_id' => '7'
        ]);
        Intervensi::create([
            'nama' => 'Terapi aktivitas',
            'diagnosa_id' => '7'
        ]);


        Intervensi::create([
            'nama' => 'Dukungan ambulasi',
            'diagnosa_id' => '8'
        ]);
        Intervensi::create([
            'nama' => 'Dukungan mobilisasi',
            'diagnosa_id' => '8'
        ]);


        Intervensi::create([
            'nama' => 'Dukungan tidur',
            'diagnosa_id' => '9'
        ]);
        Intervensi::create([
            'nama' => 'Edukasi aktivitas/ istirahat',
            'diagnosa_id' => '9'
        ]);


        Intervensi::create([
            'nama' => 'Manajemen hipovolemia',
            'diagnosa_id' => '10'
        ]);
        Intervensi::create([
            'nama' => 'Manajemen Syok Hipovolemik',
            'diagnosa_id' => '10'
        ]);


        Intervensi::create([
            'nama' => 'Manajemen hipervolemia',
            'diagnosa_id' => '11'
        ]);
        Intervensi::create([
            'nama' => 'Pemantauan cairan',
            'diagnosa_id' => '11'
        ]);


        Intervensi::create([
            'nama' => 'Manajemen hiperglikemia',
            'diagnosa_id' => '12'
        ]);
        Intervensi::create([
            'nama' => 'Manajemen Hipoglikemia',
            'diagnosa_id' => '12'
        ]);


        Intervensi::create([
            'nama' => 'Manajemen Nutrisi',
            'diagnosa_id' => '13'
        ]);
        Intervensi::create([
            'nama' => 'Pemberian Makanan',
            'diagnosa_id' => '13'
        ]);
        Intervensi::create([
            'nama' => 'Pemberian makanan enteral',
            'diagnosa_id' => '13'
        ]);
        Intervensi::create([
            'nama' => 'Pemberian makanan parenteral',
            'diagnosa_id' => '13'
        ]);
        Intervensi::create([
            'nama' => 'Pemantauan Nutrisi',
            'diagnosa_id' => '13'
        ]);


        Intervensi::create([
            'nama' => 'Pencegahan infeksi',
            'diagnosa_id' => '14'
        ]);
        Intervensi::create([
            'nama' => 'Perawatan luka',
            'diagnosa_id' => '14'
        ]);
        Intervensi::create([
            'nama' => 'Perawatan luka bakar',
            'diagnosa_id' => '14'
        ]);
        Intervensi::create([
            'nama' => 'Persalinan risiko tinggi',
            'diagnosa_id' => '14'
        ]);
        Intervensi::create([
            'nama' => 'Perawatan terminasi kehamilan',
            'diagnosa_id' => '14'
        ]);


        Intervensi::create([
            'nama' => 'Pencegahan cedera',
            'diagnosa_id' => '15'
        ]);
        Intervensi::create([
            'nama' => 'Manajemen keselamatan lingkungan',
            'diagnosa_id' => '15'
        ]);


        Intervensi::create([
            'nama' => 'Manajemen hipotermia',
            'diagnosa_id' => '16'
        ]);
        Intervensi::create([
            'nama' => 'Terapi paparan panas',
            'diagnosa_id' => '16'
        ]);


        Intervensi::create([
            'nama' => 'Manajemen hipertermia',
            'diagnosa_id' => '17'
        ]);
        Intervensi::create([
            'nama' => 'Regulasi temperatur',
            'diagnosa_id' => '17'
        ]);


        Intervensi::create([
            'nama' => 'Perawatan sirkulasi',
            'diagnosa_id' => '18'
        ]);
        Intervensi::create([
            'nama' => 'Manajemen Sensasi Perifer',
            'diagnosa_id' => '18'
        ]);


        Intervensi::create([
            'nama' => 'Pencegahan syok',
            'diagnosa_id' => '19'
        ]);
        Intervensi::create([
            'nama' => 'Pemantauan cairan',
            'diagnosa_id' => '19'
        ]);

        Intervensi::create([
            'nama' => 'Manajemen eliminasi urine',
            'diagnosa_id' => '20'
        ]);
        Intervensi::create([
            'nama' => 'perawatan diri BAB/BAK',
            'diagnosa_id' => '20'
        ]);
        Intervensi::create([
            'nama' => 'kateterisasi urine',
            'diagnosa_id' => '20'
        ]);
        Intervensi::create([
            'nama' => 'Edukasi Toilet Training',
            'diagnosa_id' => '20'
        ]);


        Intervensi::create([
            'nama' => 'Manajemen Konstipasi',
            'diagnosa_id' => '21'
        ]);
        Intervensi::create([
            'nama' => 'Dukungan perawatan diri BAB/BAK',
            'diagnosa_id' => '21'
        ]);
        Intervensi::create([
            'nama' => 'Eliminasi fekal',
            'diagnosa_id' => '21'
        ]);
        Intervensi::create([
            'nama' => 'Latihan eliminasi fekal',
            'diagnosa_id' => '21'
        ]);



        Intervensi::create([
            'nama' => 'perawatan diri BAB/BAK',
            'diagnosa_id' => '22'
        ]);
        Intervensi::create([
            'nama' => 'Perawatan diri  : berhias',
            'diagnosa_id' => '22'
        ]);
        Intervensi::create([
            'nama' => 'Perawatan diri : berpakaian',
            'diagnosa_id' => '22'
        ]);
        Intervensi::create([
            'nama' => 'Perawatan diri makan/minum',
            'diagnosa_id' => '22'
        ]);
        Intervensi::create([
            'nama' => 'Perawatan diri : mandi',
            'diagnosa_id' => '22'
        ]);
        Intervensi::create([
            'nama' => 'Perawatan diri makan',
            'diagnosa_id' => '22'
        ]);
    }
}
