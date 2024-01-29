<?php

namespace Database\Seeders;

use App\Models\Travel;
use Illuminate\Database\Seeder;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'user_id'    => '1',
                'gambar' => 'travel-a1.jpg',
                'lokasi' => 'Balige',
                'nama_travel' => 'Becak',
                'deskripsi' => 'Becak merupakan transportasi yang sering digunakan di daerah toba ini dikarenakan belum adanya  ojek dan becak juga telah digunakan sejak lama sebagai kendaraan untuk bepergian ke berbagai tempat',
            ],
            [
                'user_id'    => '1',
                'gambar' => 'travel-a2.jpg',
                'lokasi' => 'Baliger',
                'nama_travel' => 'Angkot',
                'deskripsi' => 'Angkot atau sering di sebut sebagai motor sewa di daerah Toba ini adalah transportasi yang sering digunakan oleh masyarakat jika ingin bepergian untuk jarak yang lebih jauh daripada becak dikarenakan ongkos atau biaya yang dikeluarkan akan lebih murah',
            ],

        );
        foreach ($data as $d) {
            Travel::create([
                'user_id' => $d['user_id'],
                'gambar' => $d['gambar'],
                'lokasi' => $d['lokasi'],
                'nama_travel' => $d['nama_travel'],
                'deskripsi' => $d['deskripsi'],
            ]);
        }
    }
}
