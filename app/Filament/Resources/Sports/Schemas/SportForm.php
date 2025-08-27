<?php

namespace App\Filament\Resources\Sports\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SportForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Cabang Olahraga')
                    ->required(),
                FileUpload::make('description')
                    ->label('Icon')
                    ->disk('public'),
                TextInput::make('code')
                    ->label('Kode')
                    ->required(),
            ]);
    }
}
