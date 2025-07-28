<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ArtistSongResource\Pages;
use App\Filament\Admin\Resources\ArtistSongResource\RelationManagers;
use App\Models\ArtistSong;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArtistSongResource extends Resource
{
    protected static ?string $model = ArtistSong::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('artist_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('song_id')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('artist_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('song_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListArtistSongs::route('/'),
            'create' => Pages\CreateArtistSong::route('/create'),
            'edit' => Pages\EditArtistSong::route('/{record}/edit'),
        ];
    }
}
