<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\GenresongResource\Pages;
use App\Filament\Admin\Resources\GenresongResource\RelationManagers;
use App\Models\Genresong;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GenresongResource extends Resource
{
    protected static ?string $model = Genresong::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('genre_id')
                    ->label('Genre')
                    ->relationship('genre', 'name') // pastikan relasi `genre()` ada di model Genresong
                    ->required(),

                Forms\Components\Select::make('song_id')
                    ->label('Song')
                    ->relationship('song', 'title') // pastikan relasi `song()` ada di model Genresong
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID')->sortable(),
                Tables\Columns\TextColumn::make('genre.name')->label('Genre')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('song.title')->label('Song')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGenresongs::route('/'),
            'create' => Pages\CreateGenresong::route('/create'),
            'edit' => Pages\EditGenresong::route('/{record}/edit'),
        ];
    }
}
