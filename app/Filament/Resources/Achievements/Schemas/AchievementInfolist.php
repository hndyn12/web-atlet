<?php

namespace App\Filament\Resources\Achievements\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AchievementInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('atlet_id')
                    ->numeric(),
                TextEntry::make('sport_id')
                    ->numeric(),
                TextEntry::make('year'),
                TextEntry::make('level'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
