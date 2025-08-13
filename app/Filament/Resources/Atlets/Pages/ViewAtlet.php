<?php

namespace App\Filament\Resources\Atlets\Pages;

use App\Filament\Resources\Atlets\AtletResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAtlet extends ViewRecord
{
    protected static string $resource = AtletResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
