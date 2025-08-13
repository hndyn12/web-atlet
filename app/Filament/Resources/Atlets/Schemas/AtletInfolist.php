<?php

namespace App\Filament\Resources\Atlets\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AtletInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('sport_id')
                    ->numeric(),
                TextEntry::make('birth')
                    ->date(),
                TextEntry::make('gender'),
                TextEntry::make('address'),
                TextEntry::make('slug'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
