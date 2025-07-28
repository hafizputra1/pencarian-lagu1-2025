<?php

namespace App\Filament\Admin\Resources\ArtistSongResource\Pages;

use App\Filament\Admin\Resources\ArtistSongResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArtistSong extends CreateRecord
{
    protected static string $resource = ArtistSongResource::class;
}
