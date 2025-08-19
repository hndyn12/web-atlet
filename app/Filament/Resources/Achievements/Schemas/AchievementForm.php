<?php

namespace App\Filament\Resources\Achievements\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class AchievementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Prestasi')
                    ->required(),
                Select::make('atlet_id')
                    ->label('Nama Atlet')
                    ->relationship('atlet', 'name', fn($query) => $query->orderBy('name'))
                    ->searchable(['name'])
                    ->required(),
                Select::make('sport_id')
                    ->label('Cabang Olahraga')
                    ->relationship('sport', 'name', fn($query) => $query->orderBy('name'))
                    ->required(),
                TextInput::make('year')
                    ->label('Tahun')
                    ->required(),
                TextInput::make('level')
                    ->label('Tingkat')
                    ->required(),
            ]);
    }
}
