<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
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
                'gambar' => 'e2.png',
                'lokasi' => 'Parapat',
                'nama_event' => 'Festival Mengebang Solu Bolon',
                'deskripsi' => 'Tradisi lomba mengelilingi Danau Toba menggunakan Solu Bolon atau Perahu Besar',
                'tanggal' => '2019-12-10',
            ],
            [
                'user_id'    => '1',
                'gambar' => 'e3.png',
                'lokasi' => 'Kabupaten Samosir',
                'nama_event' => 'Festival Sigale-Gale',
                'deskripsi' => 'Festival ini kita akan melihat sebuah pawai Boneka/Patung manusia khas Batak yang dibawa berkeliling Desa oleh para pria.',
                'tanggal' => '2019-05-31',
            ],
            [
                'user_id'    => '1',
                'gambar' => 'e4.jpg',
                'lokasi' => 'Kota Balige',
                'nama_event' => 'Karnaval Danau Toba',
                'deskripsi' => 'Karnaval yang pernah diadakan untuk menyambut Hari Ulang Tahun Danau Toba dan Karnaval pernah dihadiri oleh Presiden Jokowi',
                'tanggal' => '2020-07-03',
            ],

        );
        foreach ($data as $d) {
            Event::create([
                'user_id' => $d['user_id'],
                'gambar' => $d['gambar'],
                'lokasi' => $d['lokasi'],
                'nama_event' => $d['nama_event'],
                'deskripsi' => $d['deskripsi'],
                'tanggal' => $d['tanggal'],
            ]);
        }
    }
}
