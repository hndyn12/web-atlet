<?php

namespace App\Filament\Resources\Atlets\Pages;

use App\Filament\Resources\Atlets\AtletResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAtlets extends ListRecords
{
    protected static string $resource = AtletResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
