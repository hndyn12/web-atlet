<?php

namespace App\Filament\Resources\Atlets\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AtletInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->label('Nama'),
                ImageEntry::make('image')
                    ->disk('public')
                    ->visibility('public'),
                TextEntry::make('sport.name')
                    ->label('Cabang Olahraga'),
                TextEntry::make('birth')
                    ->label('Tanggal Lahir')
                    ->date(),
                TextEntry::make('gender')
                    ->label('Jenis Kelamin')
                    ->formatStateUsing(function ($state) {
                        return $state === 'L' ? 'Laki-laki' : ($state === 'P' ? 'Perempuan' : $state);
                    }),
                TextEntry::make('address')
                    ->label('Alamat'),
                TextEntry::make('slug')
                    ->label('Slug'),
                TextEntry::make('created_at')
                    ->label('Dibuat pada')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->label('Diperbarui pada')
                    ->dateTime(),
            ]);
    }
}
