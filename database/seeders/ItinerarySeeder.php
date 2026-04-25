<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ItinerarySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('itineraries')->insert([
            [
                'title' => 'Danau Aneuk Laot Trip',  
                'duration' => '2 Days',              
                'season' => 'Summer',                
                'description' => 'Jelajahi keindahan Danau Aneuk Laot di Sabang. Nikmati suasana tenang dan pemandangan alam yang memukau.',  // ← ganti deskripsi
                'image' => 'danau-aneuk-laot.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Iboih Beach Escape',
                'duration' => '3 Days',
                'season' => 'Fall',
                'description' => 'Nikmati keindahan Pantai Iboih yang terkenal dengan airnya yang jernih dan spot snorkeling terbaik.',
                'image' => 'iboih.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Pantai Gapang Adventure',
                'duration' => '2 Days',
                'season' => 'Summer',
                'description' => 'Pengalaman seru di Pantai Gapang, tempat favorit untuk diving dan menikmati sunset Sabang.',
                'image' => 'pantai-gapang.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Pantai Kasih Tour',
                'duration' => '1 Day',
                'season' => 'Spring',
                'description' => 'Kunjungi Pantai Kasih yang romantis dengan pasir putih dan ombak yang tenang.',
                'image' => 'pantai-kasih.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Pulau Rubiah Snorkeling',
                'duration' => '1 Day',
                'season' => 'Summer',
                'description' => 'Eksplorasi keindahan bawah laut Pulau Rubiah dengan terumbu karang dan ikan warna-warni.',
                'image' => 'pulau-rubiah.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Sabang Sunset Tour',
                'duration' => '1 Day',
                'season' => 'Fall',
                'description' => 'Nikmati sunset terbaik di Sabang sambil menikmati kopi dan angin laut.',
                'image' => 'sabang-sunset.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Sabang Waterfall',
                'duration' => '1 Day',
                'season' => 'Summer',
                'description' => 'Keliling pantai-pantai cantik di Sabang dalam satu hari yang tak terlupakan.',
                'image' => 'sabang-beach.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Sabang Underwater Paradise',
                'duration' => '2 Days',
                'season' => 'Spring',
                'description' => 'Menyelam di perairan Sabang yang terkenal sebagai surga bawah laut dunia.',
                'image' => 'sabang-underwater.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}