<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $songs = [
            ['title' => 'Blinding Lights', 'duration' => 200, 'release_date' => '2020-03-20'],
            ['title' => 'Easy On Me', 'duration' => 210, 'release_date' => '2021-10-15'],
            ['title' => 'Butter', 'duration' => 175, 'release_date' => '2021-05-21'],
            ['title' => 'Anti-Hero', 'duration' => 195, 'release_date' => '2022-10-21'],
            ['title' => 'God’s Plan', 'duration' => 190, 'release_date' => '2018-01-19'],
        ];

        foreach ($songs as $data) {
            Song::create($data);
        }
    }
}
