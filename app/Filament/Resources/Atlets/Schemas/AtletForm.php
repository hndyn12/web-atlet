<?php

namespace App\Filament\Resources\Atlets\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Filament\Infolists\Components\ImageEntry;

class AtletForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama')
                    ->afterStateUpdated(fn($state, callable $set) =>
                    $set('slug', Str::slug($state)))
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->directory('images')
                    ->disk('public')
                    ->visibility('public'),
                Select::make('sport_id')
                    ->label('Cabang Olahraga')
                    ->relationship('sport', 'name', fn($query) => $query->orderBy('name'))
                    ->required(),
                DatePicker::make('birth')
                    ->label('Tanggal Lahir')
                    ->required(),
                Select::make('gender')
                    ->label('Jenis Kelamin')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ])
                    ->required(),
                TextInput::make('address')
                    ->label('Alamat')
                    ->required(),
                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->disabled()
                    ->dehydrated()
                    ->unique(ignoreRecord: true),
            ]);
    }
}
