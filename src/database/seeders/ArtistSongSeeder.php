<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $songArtistMap = [
            1 => [2],         // Blinding Lights → The Weeknd
            2 => [1],         // Easy On Me → Adele
            3 => [5],         // Butter → BTS
            4 => [4],         // Anti-Hero → Taylor Swift
            5 => [3],         // God’s Plan → Drake
        ];

        foreach ($songArtistMap as $songId => $artistIds) {
            $song = Song::find($songId);
            $song->artists()->attach($artistIds);
        }
    }
}
