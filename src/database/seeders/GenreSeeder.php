<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = ['Pop', 'Hip-Hop', 'R&B', 'K-Pop', 'Indie'];

        foreach ($genres as $name) {
            Genre::create(['name' => $name]);
        }
    }
}
