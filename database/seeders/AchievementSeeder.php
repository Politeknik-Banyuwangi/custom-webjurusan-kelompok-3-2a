<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Achievement::insert([
            [
                'achievement_level_id' => 2,
                'achievement_type_id' => 2,
                'user_id' => 1,
                'title' => 'Juara II Olahraga Bola Voli Tingkat Kabupaten Banyuwangi',
                'rating' => '2',
                'is_academic' => false,
                'location' => 'GOR Tawangalun',
                'organizer' => 'Pemkab Banyuwangi',
                'date_start' => '2022-01-12',
                'date_end' => '2022-01-14',
                'attachment' => null,
                'description' => 'Juara II Olahraga Bola Voli Putri Tingkat Kabupaten Banyuwangi Tahun 2022',
                'link' => 'juara-II-olahraga-bola-voli-tingkat-kabupaten-banyuwangi',
                'is_external_link' => false,
                'is_publish' => true,
                'published_at' => Carbon::now(),
                'publisher_id' => 1,
            ]
        ]);
    }
}
