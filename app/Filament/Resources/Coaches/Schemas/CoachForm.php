<?php

namespace App\Filament\Resources\Coaches\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class CoachForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('sport_id')
                    ->label('Cabang Olahraga')
                    ->relationship('sport', 'name', fn($query) => $query->orderBy('name'))
                    ->required(),

                TextInput::make('name')
                    ->label('Nama Pelatih')
                    ->required(),

                Select::make('lisensi')
                    ->label('Lisensi')
                    ->options([
                        'Internasional' => 'Internasional',
                        'Nasional'      => 'Nasional',
                        'Provinsi'      => 'Provinsi',
                        'Daerah'        => 'Daerah',
                    ])
                    ->required(),

                FileUpload::make('sertifikat')
                    ->directory('dokumen')
                    ->disk('public')
                    ->visibility('public'),
            ]);
    }
}
