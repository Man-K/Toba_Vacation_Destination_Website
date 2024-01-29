<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(HotelSeeder::class);
        $this->call(TravelSeeder::class);
        $this->call(KulinerSeeder::class);
        $this->call(EventSeeder::class);
    }
}
