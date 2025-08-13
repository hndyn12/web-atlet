<?php

namespace App\Filament\Resources\Atlets\Pages;

use App\Filament\Resources\Atlets\AtletResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAtlet extends EditRecord
{
    protected static string $resource = AtletResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
