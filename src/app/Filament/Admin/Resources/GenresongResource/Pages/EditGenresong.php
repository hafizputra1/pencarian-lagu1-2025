<?php

namespace App\Filament\Admin\Resources\GenresongResource\Pages;

use App\Filament\Admin\Resources\GenresongResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGenresong extends EditRecord
{
    protected static string $resource = GenresongResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
