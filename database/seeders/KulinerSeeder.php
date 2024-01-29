<?php

namespace Database\Seeders;

use App\Models\Kuliner;
use Illuminate\Database\Seeder;

class KulinerSeeder extends Seeder
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
                'gambar' => 'kuliner-a2.jpg',
                'lokasi' => 'https://goo.gl/maps/C8M1dzM2t7fGT4Bt5',
                'nama_kuliner' => 'Fly Over',
                'deskripsi' => 'Fly over merupakan tempat makan yang banyak menyediakan makanan makanan khas daerah batak terutama toba rumah makan fly over juga memiliki tempat yang strategis',
                'tempat' => 'Lokasi: laguboti',
                'keterangan' => 'Buka: 6am-12am',
            ],
            [
                'user_id'    => '1',
                'gambar' => 'kuliner-a3.jpg',
                'lokasi' => 'https://goo.gl/maps/c5ja8yHgr4rGQFwJA',
                'nama_kuliner' => 'Monalisa',
                'deskripsi' => 'Rumah makan monalisa merupakan rumah makan yang menyediakan makanan makanan tradisional yang sering di gemari oleh masyarakat maupun wisatawan yang datang ke daerah toba',
                'tempat' => 'Lokasi: Balige',
                'keterangan' => 'Buka: 6am-12am',
            ],

        );
        foreach ($data as $d) {
            Kuliner::create([
                'user_id' => $d['user_id'],
                'gambar' => $d['gambar'],
                'lokasi' => $d['lokasi'],
                'nama_kuliner' => $d['nama_kuliner'],
                'deskripsi' => $d['deskripsi'],
                'tempat' => $d['tempat'],
                'keterangan' => $d['keterangan'],
            ]);
        }
    }
}
