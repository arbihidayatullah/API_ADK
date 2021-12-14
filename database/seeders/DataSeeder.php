<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Data;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //respirasi
        Data::create([
            'nama' => 'Batuk tidak efektif',
            'skor' => '5',
            'tipe_id' => '1',
            'diagnosa_id' => '1'
        ]);
        Data::create([
            'nama' => 'Tidak mampu batuk',
            'skor' => '4',
            'tipe_id' => '1',
            'diagnosa_id' => '1'
        ]);
        Data::create([
            'nama' => 'Sputum berlebih',
            'skor' => '3',
            'tipe_id' => '1',
            'diagnosa_id' => '1'
        ]);
        Data::create([
            'nama' => 'Mengi, Wheezing dan atau ronkhi kering',
            'skor' => '2',
            'tipe_id' => '1',
            'diagnosa_id' => '1'
        ]);
        Data::create([
            'nama' => 'Mekonium di jalan napas (pada neonatus)',
            'skor' => '1',
            'tipe_id' => '1',
            'diagnosa_id' => '1'
        ]);
        Data::create([
            'nama' => 'Penggunaan otot bantu pernapasan',
            'skor' => '5',
            'tipe_id' => '1',
            'diagnosa_id' => '2'
        ]);
        Data::create([
            'nama' => 'Pola napas abnormal ( takipnea, bradipnea, hiperventilasi, kussmaul, cheyne stokes)',
            'skor' => '4',
            'tipe_id' => '1',
            'diagnosa_id' => '2'
        ]);
        Data::create([
            'nama' => 'Fase ekspirasi memanjang',
            'skor' => '3',
            'tipe_id' => '1',
            'diagnosa_id' => '2'
        ]);
        Data::create([
            'nama' => 'Pernapasan purse lip ',
            'skor' => '2',
            'tipe_id' => '1',
            'diagnosa_id' => '2'
        ]);
        Data::create([
            'nama' => 'Kapasitas vital menurun',
            'skor' => '1',
            'tipe_id' => '1',
            'diagnosa_id' => '2'
        ]);
        //------------------------------------------------------------------------------------------------------------------------------------------------------
        //rasa nyaman
        Data::create([
            'nama' => 'Mengeluh mual',
            'skor' => '5',
            'tipe_id' => '2',
            'diagnosa_id' => '3'
        ]);
        Data::create([
            'nama' => 'Merasa ingin muntah',
            'skor' => '4',
            'tipe_id' => '2',
            'diagnosa_id' => '3'
        ]);
        Data::create([
            'nama' => 'Tidak berminat makan',
            'skor' => '3',
            'tipe_id' => '2',
            'diagnosa_id' => '3'
        ]);
        Data::create([
            'nama' => 'Merasa asam di mulut',
            'skor' => '2',
            'tipe_id' => '2',
            'diagnosa_id' => '3'
        ]);
        Data::create([
            'nama' => 'Saliva meningkat',
            'skor' => '1',
            'tipe_id' => '2',
            'diagnosa_id' => '3'
        ]);
        Data::create([
            'nama' => 'Mengeluh nyeri',
            'skor' => '5',
            'tipe_id' => '2',
            'diagnosa_id' => '4'
        ]);
        Data::create([
            'nama' => 'Tampak meringis',
            'skor' => '4',
            'tipe_id' => '2',
            'diagnosa_id' => '4'
        ]);
        Data::create([
            'nama' => 'Bersikap protektif (posisi menghindari nyeri)',
            'skor' => '3',
            'tipe_id' => '2',
            'diagnosa_id' => '4'
        ]);
        Data::create([
            'nama' => 'Gelisah',
            'skor' => '2',
            'tipe_id' => '2',
            'diagnosa_id' => '4'
        ]);
        Data::create([
            'nama' => 'Berfokus pada diri sendiri',
            'skor' => '1',
            'tipe_id' => '2',
            'diagnosa_id' => '4'
        ]);
        Data::create([
            'nama' => 'Mengeluh nyeri',
            'skor' => '5',
            'tipe_id' => '2',
            'diagnosa_id' => '5'
        ]);
        Data::create([
            'nama' => 'Perineum terasa tertekan',
            'skor' => '4',
            'tipe_id' => '2',
            'diagnosa_id' => '5'
        ]);
        Data::create([
            'nama' => 'Ekspresi wajah meringis',
            'skor' => '3',
            'tipe_id' => '2',
            'diagnosa_id' => '5'
        ]);
        Data::create([
            'nama' => 'Berposisi meringankan nyeri',
            'skor' => '2',
            'tipe_id' => '2',
            'diagnosa_id' => '5'
        ]);
        Data::create([
            'nama' => 'uterus teraba membulat',
            'skor' => '1',
            'tipe_id' => '2',
            'diagnosa_id' => '5'
        ]);
        Data::create([
            'nama' => 'Mengeluh tidak nyaman',
            'skor' => '5',
            'tipe_id' => '2',
            'diagnosa_id' => '6'
        ]);
        Data::create([
            'nama' => 'Tampak meringis',
            'skor' => '4',
            'tipe_id' => '2',
            'diagnosa_id' => '6'
        ]);
        Data::create([
            'nama' => 'Terdapat kontraksi uterus',
            'skor' => '3',
            'tipe_id' => '2',
            'diagnosa_id' => '6'
        ]);
        Data::create([
            'nama' => 'Luka episiotomi',
            'skor' => '2',
            'tipe_id' => '2',
            'diagnosa_id' => '6'
        ]);
        Data::create([
            'nama' => 'Payudara bengkak',
            'skor' => '1',
            'tipe_id' => '2',
            'diagnosa_id' => '6'
        ]);

        //----------------------------------------------------------------------------------------------------------------------------------------------
        //Aktivitas dan Istirahat
        Data::create([
            'nama' => 'Mengeluh lelah',
            'skor' => '5',
            'tipe_id' => '3',
            'diagnosa_id' => '7'
        ]);
        Data::create([
            'nama' => 'Dispnea saat/ setelah aktivitas',
            'skor' => '4',
            'tipe_id' => '3',
            'diagnosa_id' => '7'
        ]);
        Data::create([
            'nama' => 'Merasa tidak nyaman setelah aktivitas',
            'skor' => '3',
            'tipe_id' => '3',
            'diagnosa_id' => '7'
        ]);
        Data::create([
            'nama' => 'Merasa lemah',
            'skor' => '2',
            'tipe_id' => '3',
            'diagnosa_id' => '7'
        ]);
        Data::create([
            'nama' => 'Frekuensi jantung meningkat > 20% dari kondisi istirahat',
            'skor' => '1',
            'tipe_id' => '3',
            'diagnosa_id' => '7'
        ]);
        Data::create([
            'nama' => 'Mengeluh sulit menggerakkan ekstremitas',
            'skor' => '5',
            'tipe_id' => '3',
            'diagnosa_id' => '8'
        ]);
        Data::create([
            'nama' => 'Kekuatan otot menurun',
            'skor' => '4',
            'tipe_id' => '3',
            'diagnosa_id' => '8'
        ]);
        Data::create([
            'nama' => 'Rentang gerak (ROM) menurun',
            'skor' => '3',
            'tipe_id' => '3',
            'diagnosa_id' => '8'
        ]);
        Data::create([
            'nama' => 'Nyeri saat bergerak',
            'skor' => '2',
            'tipe_id' => '3',
            'diagnosa_id' => '8'
        ]);
        Data::create([
            'nama' => 'Sendi kaku/ kontraktur',
            'skor' => '1',
            'tipe_id' => '3',
            'diagnosa_id' => '8'
        ]);
        Data::create([
            'nama' => 'Mengeluh sulit tidur',
            'skor' => '5',
            'tipe_id' => '3',
            'diagnosa_id' => '9'
        ]);
        Data::create([
            'nama' => 'Mengeluh sering terjaga saat tidur',
            'skor' => '4',
            'tipe_id' => '3',
            'diagnosa_id' => '9'
        ]);
        Data::create([
            'nama' => 'Mengeluh tidak puas tidur',
            'skor' => '3',
            'tipe_id' => '3',
            'diagnosa_id' => '9'
        ]);
        Data::create([
            'nama' => 'Mengeluh pola tidur berubah',
            'skor' => '2',
            'tipe_id' => '3',
            'diagnosa_id' => '9'
        ]);
        Data::create([
            'nama' => 'Mengeluh istirahat tidak cukup',
            'skor' => '1',
            'tipe_id' => '3',
            'diagnosa_id' => '9'
        ]);

        //-----------------------------------------------------------------------------------------------------------------------------------------------------
        //nutrisi dan cairan
        Data::create([
            'nama' => 'Volume urine menurun',
            'skor' => '5',
            'tipe_id' => '4',
            'diagnosa_id' => '10'
        ]);
        Data::create([
            'nama' => 'Mengeluh haus',
            'skor' => '4',
            'tipe_id' => '4',
            'diagnosa_id' => '10'
        ]);
        Data::create([
            'nama' => 'Tekanan darah menurun',
            'skor' => '3',
            'tipe_id' => '4',
            'diagnosa_id' => '10'
        ]);
        Data::create([
            'nama' => 'Turgor kulit tidak elastis',
            'skor' => '2',
            'tipe_id' => '4',
            'diagnosa_id' => '10'
        ]);
        Data::create([
            'nama' => 'Membran mukosa kering',
            'skor' => '1',
            'tipe_id' => '4',
            'diagnosa_id' => '10'
        ]);
        Data::create([
            'nama' => 'Edema anasarka dan atau edema perifer',
            'skor' => '5',
            'tipe_id' => '4',
            'diagnosa_id' => '11'
        ]);
        Data::create([
            'nama' => 'Berat badan meningkat dalam waktu singkat',
            'skor' => '4',
            'tipe_id' => '4',
            'diagnosa_id' => '11'
        ]);
        Data::create([
            'nama' => 'Distensi Vena Jugularis',
            'skor' => '3',
            'tipe_id' => '4',
            'diagnosa_id' => '11'
        ]);
        Data::create([
            'nama' => 'Intake lebih banyak dari output',
            'skor' => '2',
            'tipe_id' => '4',
            'diagnosa_id' => '11'
        ]);
        Data::create([
            'nama' => 'Kadar glukosa dalam darah tinggi atau rendah',
            'skor' => '5',
            'tipe_id' => '4',
            'diagnosa_id' => '12'
        ]);
        Data::create([
            'nama' => 'Tanda hiperglikemia ( lelah, mulut kering, haus meningkat)',
            'skor' => '4',
            'tipe_id' => '4',
            'diagnosa_id' => '12'
        ]);
        Data::create([
            'nama' => 'Tanda hipoglikemia (pusing, mengantuk, mengeluh lapar)',
            'skor' => '3',
            'tipe_id' => '4',
            'diagnosa_id' => '12'
        ]);
        Data::create([
            'nama' => 'Kesadaran menurun',
            'skor' => '2',
            'tipe_id' => '4',
            'diagnosa_id' => '12'
        ]);
        Data::create([
            'nama' => 'Jumlah urine meningkat',
            'skor' => '1',
            'tipe_id' => '4',
            'diagnosa_id' => '12'
        ]);
        Data::create([
            'nama' => 'Berat badan menurun minimal 10% dari BB ideal',
            'skor' => '5',
            'tipe_id' => '4',
            'diagnosa_id' => '13'
        ]);
        Data::create([
            'nama' => 'Nafsu makan menurun',
            'skor' => '4',
            'tipe_id' => '4',
            'diagnosa_id' => '13'
        ]);
        Data::create([
            'nama' => 'Cepat kenyang setelah makan',
            'skor' => '3',
            'tipe_id' => '4',
            'diagnosa_id' => '13'
        ]);
        Data::create([
            'nama' => 'Membran mukosa pucat',
            'skor' => '2',
            'tipe_id' => '4',
            'diagnosa_id' => '13'
        ]);
        Data::create([
            'nama' => 'Serum albumin turun',
            'skor' => '1',
            'tipe_id' => '4',
            'diagnosa_id' => '13'
        ]);

        //---------------------------------------------------------------------------------------------------------------------------------------------------
        //keamanan dan proteksi
        Data::create([
            'nama' => 'Penyakit kronis',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '14'
        ]);
        Data::create([
            'nama' => 'Malnutrisi',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '14'
        ]);
        Data::create([
            'nama' => 'Kerusakan integritas kulit',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '14'
        ]);
        Data::create([
            'nama' => 'Ketuban Pecah Lama',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '14'
        ]);
        Data::create([
            'nama' => 'KPSW',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '14'
        ]);
        Data::create([
            'nama' => 'Penurunan Hb',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '14'
        ]);
        Data::create([
            'nama' => 'Leukopenia',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '14'
        ]);
        Data::create([
            'nama' => 'Imunosupresi',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '14'
        ]);
        Data::create([
            'nama' => 'Ketidaknormalan profil darah',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '15'
        ]);
        Data::create([
            'nama' => 'Perubahan orientasi afektif',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '15'
        ]);
        Data::create([
            'nama' => 'Perubahan sensasi',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '15'
        ]);
        Data::create([
            'nama' => 'Disfungsi autoimun',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '15'
        ]);
        Data::create([
            'nama' => 'Disfungsi biokimia',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '15'
        ]);
        Data::create([
            'nama' => 'Hipoksia jaringan',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '15'
        ]);
        Data::create([
            'nama' => 'Malnutrisi',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '15'
        ]);
        Data::create([
            'nama' => 'Perubahan fungsi psikomotor',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '15'
        ]);
        Data::create([
            'nama' => 'Perubahan fungsi kognitif',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '15'
        ]);
        Data::create([
            'nama' => 'Kulit teraba dingin',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '16'
        ]);
        Data::create([
            'nama' => 'Menggigil',
            'skor' => '4',
            'tipe_id' => '5',
            'diagnosa_id' => '16'
        ]);
        Data::create([
            'nama' => 'Suhu Tubuh di bawah nilai normal',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '16'
        ]);
        Data::create([
            'nama' => 'Suhu tubuh diatas normal',
            'skor' => '5',
            'tipe_id' => '5',
            'diagnosa_id' => '17'
        ]);
        Data::create([
            'nama' => 'Kulit terasa hangat',
            'skor' => '4',
            'tipe_id' => '5',
            'diagnosa_id' => '17'
        ]);
        Data::create([
            'nama' => 'Kulit merah',
            'skor' => '3',
            'tipe_id' => '5',
            'diagnosa_id' => '17'
        ]);
        Data::create([
            'nama' => 'Kejang',
            'skor' => '2',
            'tipe_id' => '5',
            'diagnosa_id' => '17'
        ]);
        Data::create([
            'nama' => 'Takikardi atau Takipnea',
            'skor' => '1',
            'tipe_id' => '5',
            'diagnosa_id' => '17'
        ]);

        //==============================================================================================================================================
        //sirkulasi
        Data::create([
            'nama' => 'Pengisian kapiler >3 detik',
            'skor' => '5',
            'tipe_id' => '6',
            'diagnosa_id' => '18'
        ]);
        Data::create([
            'nama' => 'Nadi perifer menurun atau tidak teraba',
            'skor' => '4',
            'tipe_id' => '6',
            'diagnosa_id' => '18'
        ]);
        Data::create([
            'nama' => 'Akral teraba dingin',
            'skor' => '3',
            'tipe_id' => '6',
            'diagnosa_id' => '18'
        ]);
        Data::create([
            'nama' => 'Warna kulit pucat',
            'skor' => '2',
            'tipe_id' => '6',
            'diagnosa_id' => '18'
        ]);
        Data::create([
            'nama' => 'Turgor kulit menurun',
            'skor' => '1',
            'tipe_id' => '6',
            'diagnosa_id' => '18'
        ]);
        Data::create([
            'nama' => 'Hipoksemia',
            'skor' => '5',
            'tipe_id' => '6',
            'diagnosa_id' => '19'
        ]);
        Data::create([
            'nama' => 'Hipoksia',
            'skor' => '5',
            'tipe_id' => '6',
            'diagnosa_id' => '19'
        ]);
        Data::create([
            'nama' => 'Hipotensi',
            'skor' => '5',
            'tipe_id' => '6',
            'diagnosa_id' => '19'
        ]);
        Data::create([
            'nama' => 'Kekurangan volume cairan',
            'skor' => '5',
            'tipe_id' => '6',
            'diagnosa_id' => '19'
        ]);
        Data::create([
            'nama' => 'Sepsis',
            'skor' => '5',
            'tipe_id' => '6',
            'diagnosa_id' => '19'
        ]);

        //===========================================================================================================================================
        //Eliminasi
        Data::create([
            'nama' => 'Desakan berkemih (urgensi)',
            'skor' => '5',
            'tipe_id' => '7',
            'diagnosa_id' => '20'
        ]);
        Data::create([
            'nama' => 'Urine menetes (Dribbling)',
            'skor' => '5',
            'tipe_id' => '7',
            'diagnosa_id' => '20'
        ]);
        Data::create([
            'nama' => 'Sering buang air kecil',
            'skor' => '5',
            'tipe_id' => '7',
            'diagnosa_id' => '20'
        ]);
        Data::create([
            'nama' => 'Nokturia',
            'skor' => '3',
            'tipe_id' => '7',
            'diagnosa_id' => '20'
        ]);
        Data::create([
            'nama' => 'Mengompol',
            'skor' => '4',
            'tipe_id' => '7',
            'diagnosa_id' => '20'
        ]);
        Data::create([
            'nama' => 'Enuresis',
            'skor' => '5',
            'tipe_id' => '7',
            'diagnosa_id' => '20'
        ]);
        Data::create([
            'nama' => 'Distensi Kandung kemih',
            'skor' => '3',
            'tipe_id' => '7',
            'diagnosa_id' => '20'
        ]);
        Data::create([
            'nama' => 'Berkemih tidak tuntas',
            'skor' => '5',
            'tipe_id' => '7',
            'diagnosa_id' => '20'
        ]);
        Data::create([
            'nama' => 'Volume residu urin meningkat',
            'skor' => '3',
            'tipe_id' => '7',
            'diagnosa_id' => '20'
        ]);
        Data::create([
            'nama' => 'Feses Keras',
            'skor' => '5',
            'tipe_id' => '7',
            'diagnosa_id' => '21'
        ]);
        Data::create([
            'nama' => 'Pengeluaran feses lama dan sulit',
            'skor' => '4',
            'tipe_id' => '7',
            'diagnosa_id' => '21'
        ]);
        Data::create([
            'nama' => 'Defekasi kurang dari 2 kali seminggu',
            'skor' => '3',
            'tipe_id' => '7',
            'diagnosa_id' => '21'
        ]);
        Data::create([
            'nama' => 'Peristaltik usus menururn',
            'skor' => '2',
            'tipe_id' => '7',
            'diagnosa_id' => '21'
        ]);
        Data::create([
            'nama' => 'mengejan saat defekasi',
            'skor' => '1',
            'tipe_id' => '7',
            'diagnosa_id' => '21'
        ]);

        //=========================================================================================================================================
        //Perilaku
        Data::create([
            'nama' => 'Menolak melakukan perawatan diri',
            'skor' => '5',
            'tipe_id' => '8',
            'diagnosa_id' => '22'
        ]);
        Data::create([
            'nama' => 'Tidak mampu mandi, mengenakan pakaian/makan/ke toilet/berhias secara mandirii',
            'skor' => '5',
            'tipe_id' => '8',
            'diagnosa_id' => '22'
        ]);
        Data::create([
            'nama' => 'Minat melakukan perawatan diri kurang',
            'skor' => '5',
            'tipe_id' => '8',
            'diagnosa_id' => '22'
        ]);
    }
}
