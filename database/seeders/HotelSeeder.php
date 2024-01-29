<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
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
                'gambar' => 'hotel-a1.jpg',
                'lokasi' => 'https://g.page/labersatobahotelbalige?share',
                'nama_hotel' => 'Labersa Hotel',
                'deskripsi' => 'Hotel Labersa merupakan hotel yang sangat megah dan merupakan hotel paling besar di daerah toba hotel ini telah mencapai standat bintang 4 dan banyak di kunjungi oleh turis untuk berlibur dan menukmati hiburan yang ada di sekitaran hotel tersebut',
                'tempat' => 'Lokasi: Tampubolon, Toba',
                'keterangan' => 'Buka: 24 Jam',
            ],
            [
                'user_id'    => '1',
                'gambar' => 'hotel-a2.jpg',
                'lokasi' => 'https://goo.gl/maps/J3AbYQSL3Uer6XEw9',
                'nama_hotel' => 'Mutiara Balige',
                'deskripsi' => 'Mutiara Hotel adalah hotel yang banyak di tempati oleh masyarakat saat sedang berlibur ke daerah toba.hotel ini juga terletak di pinggir danau sehingga para turis dan wisatawan yang datang juga dapat menikmati pemandangan indah sambil beristirahat di dalam hotel',
                'tempat' => 'Lokasi: Balige',
                'keterangan' => 'Buka: 24 Jam',
            ],
            [
                'user_id'    => '1',
                'gambar' => 'hotel-a3.jpg',
                'lokasi' => 'https://goo.gl/maps/YTE5qiTSGuyXwZ919',
                'nama_hotel' => 'Nabasa Hotel',
                'deskripsi' => 'Hotel Nabasa merupakan hotel yang terletak di daerah toba tepatnya di pinggir danau. dikarenakan tempatnya yang sejuk dan menarik hotel ini banyak di kunjungi oleh turis dan dengan hotel ini para turis juga dapat memanjakan mata melihat danau',
                'tempat' => 'Lokasi: Balige',
                'keterangan' => 'Buka: 6am-12am',
            ],

        );
        foreach ($data as $d) {
            Hotel::create([
                'user_id' => $d['user_id'],
                'gambar' => $d['gambar'],
                'lokasi' => $d['lokasi'],
                'nama_hotel' => $d['nama_hotel'],
                'deskripsi' => $d['deskripsi'],
                'tempat' => $d['tempat'],
                'keterangan' => $d['keterangan'],
            ]);
        }
    }
}
