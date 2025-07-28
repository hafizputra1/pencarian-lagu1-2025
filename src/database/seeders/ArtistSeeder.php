<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artists = ['Adele', 'The Weeknd', 'Drake', 'Taylor Swift', 'BTS'];

        foreach ($artists as $name) {
            Artist::create(['name' => $name]);
        }
    }
}
