<?php

namespace App\Filament\Resources\Coaches\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;

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

                TextEntry::make('sertifikat')
                    ->label('Sertifikat')
                    ->formatStateUsing(
                        fn($state) =>
                        str_ends_with(strtolower($state), '.pdf')
                            ? '📄 PDF'
                            : '🖼️ Gambar'
                    )
                    ->url(fn($state) => $state ? Storage::disk('public')->url($state) : null)
                    ->openUrlInNewTab(),
            ]);
    }
}
