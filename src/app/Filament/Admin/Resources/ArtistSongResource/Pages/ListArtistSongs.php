<?php

namespace App\Filament\Admin\Resources\ArtistSongResource\Pages;

use App\Filament\Admin\Resources\ArtistSongResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArtistSongs extends ListRecords
{
    protected static string $resource = ArtistSongResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
