<?php

namespace App\Filament\Admin\Resources\ArtistSongResource\Pages;

use App\Filament\Admin\Resources\ArtistSongResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArtistSong extends EditRecord
{
    protected static string $resource = ArtistSongResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
