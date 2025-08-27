<?php

namespace App\Filament\Resources\Coaches\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Section;
use Filament\Schemas\Schema;

class CoachInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('sport.name')
                    ->label('Cabang Olahraga'),

                TextEntry::make('name')
                    ->label('Nama Pelatih'),

                TextEntry::make('lisensi')
                    ->label('Lisensi'),

                ImageEntry::make('sertifikat')
                    ->disk('public')
                    ->visibility('public'),
            ]);
    }
}
