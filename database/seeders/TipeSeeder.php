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
            'image' => ''
        ]);

        Tipe::create([
            'nama' => 'Rasa Nyaman',
            'image' => ''
        ]);

        Tipe::create([
            'nama' => 'Aktivitas dan Istirahat',
            'image' => ''
        ]);

        Tipe::create([
            'nama' => 'Nutrisi dan Cairan',
            'image' => ''
        ]);

        Tipe::create([
            'nama' => 'Keamanan dan Proteksi',
            'image' => ''
        ]);

        Tipe::create([
            'nama' => 'Sirkulasi',
            'image' => ''
        ]);

        Tipe::create([
            'nama' => 'Eliminasi',
            'image' => ''
        ]);

        Tipe::create([
            'nama' => 'Perilaku',
            'image' => ''
        ]);
    }
}
