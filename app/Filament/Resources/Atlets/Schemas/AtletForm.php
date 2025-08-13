<?php

namespace App\Filament\Resources\Atlets\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class AtletForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->directory('atlets/images')
                    ->maxSize(2048)
                    ->required(),
                TextInput::make('sport_id')
                    ->required()
                    ->numeric(),
                DatePicker::make('birth')
                    ->required(),
                TextInput::make('gender')
                    ->required(),
                TextInput::make('address')
                    ->required(),
                TextInput::make('slug')
                    ->required()
                    ->disabled()
                    ->dehydrated()
                    ->default(fn($get) => Str::slug($get('name')))
                    ->unique(ignoreRecord: true),
            ]);
    }
}
