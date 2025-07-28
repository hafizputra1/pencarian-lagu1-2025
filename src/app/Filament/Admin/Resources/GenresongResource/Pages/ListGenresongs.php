<?php

namespace App\Filament\Admin\Resources\GenresongResource\Pages;

use App\Filament\Admin\Resources\GenresongResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGenresongs extends ListRecords
{
    protected static string $resource = GenresongResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
