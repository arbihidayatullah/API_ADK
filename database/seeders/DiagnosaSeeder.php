<?php

namespace Database\Seeders;

use App\Models\Diagnosa;
use Illuminate\Database\Seeder;

class DiagnosaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Diagnosa::create([
            'nama' => 'Bersihan jalan napas tidak efektif',
            'tipe_id' => '1'
        ]);
        Diagnosa::create([
            'nama' => 'Pola napas tidak efektif',
            'tipe_id' => '1'
        ]);



        Diagnosa::create([
            'nama' => 'Nausea',
            'tipe_id' => '2'
        ]);
        Diagnosa::create([
            'nama' => 'Nyeri Akut',
            'tipe_id' => '2'
        ]);
        Diagnosa::create([
            'nama' => 'Nyeri melahirkan',
            'tipe_id' => '2'
        ]);
        Diagnosa::create([
            'nama' => 'Ketidaknyamanan pasca partum',
            'tipe_id' => '2'
        ]);



        Diagnosa::create([
            'nama' => 'Intoleransi Aktivitas',
            'tipe_id' => '3'
        ]);
        Diagnosa::create([
            'nama' => 'Gangguan mobilitas fisik',
            'tipe_id' => '3'
        ]);
        Diagnosa::create([
            'nama' => 'Gangguan pola tidur',
            'tipe_id' => '3'
        ]);



        Diagnosa::create([
            'nama' => 'Hipovolemia',
            'tipe_id' => '4'
        ]);
        Diagnosa::create([
            'nama' => 'Hipervolemia',
            'tipe_id' => '4'
        ]);
        Diagnosa::create([
            'nama' => 'Ketidakstabilan kadar gula darah',
            'tipe_id' => '4'
        ]);
        Diagnosa::create([
            'nama' => 'Defisit Nutrisi',
            'tipe_id' => '4'
        ]);




        Diagnosa::create([
            'nama' => 'Risiko Infeksi',
            'tipe_id' => '5'
        ]);
        Diagnosa::create([
            'nama' => 'Risiko cedera',
            'tipe_id' => '5'
        ]);
        Diagnosa::create([
            'nama' => 'Hipotermia',
            'tipe_id' => '5'
        ]);
        Diagnosa::create([
            'nama' => 'Hipertermia',
            'tipe_id' => '5'
        ]);




        Diagnosa::create([
            'nama' => 'Perfusi Perifer Tidak Efektif',
            'tipe_id' => '6'
        ]);
        Diagnosa::create([
            'nama' => 'Risiko Syok',
            'tipe_id' => '6'
        ]);



        Diagnosa::create([
            'nama' => 'Gangguan eliminasi urine',
            'tipe_id' => '7'
        ]);
        Diagnosa::create([
            'nama' => 'Konstipasi',
            'tipe_id' => '7'
        ]);



        Diagnosa::create([
            'nama' => 'Defisit perawatan diri',
            'tipe_id' => '8'
        ]);
    }
}
