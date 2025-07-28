<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $songGenreMap = [
            1 => [1, 3],   // Blinding Lights → Pop, R&B
            2 => [1],      // Easy On Me → Pop
            3 => [1, 4],   // Butter → Pop, K-Pop
            4 => [1],      // Anti-Hero → Pop
            5 => [2],      // God’s Plan → Hip-Hop
        ];

        foreach ($songGenreMap as $songId => $genreIds) {
            $song = Song::find($songId);
            $song->genres()->attach($genreIds);
        }
    }
}
