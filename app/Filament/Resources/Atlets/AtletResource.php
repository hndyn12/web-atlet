<?php

namespace App\Filament\Resources\Atlets;

use App\Filament\Resources\Atlets\Pages\CreateAtlet;
use App\Filament\Resources\Atlets\Pages\EditAtlet;
use App\Filament\Resources\Atlets\Pages\ListAtlets;
use App\Filament\Resources\Atlets\Pages\ViewAtlet;
use App\Filament\Resources\Atlets\Schemas\AtletForm;
use App\Filament\Resources\Atlets\Schemas\AtletInfolist;
use App\Filament\Resources\Atlets\Tables\AtletsTable;
use App\Models\Atlet;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AtletResource extends Resource
{
    protected static ?string $model = Atlet::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return AtletForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AtletInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AtletsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAtlets::route('/'),
            'create' => CreateAtlet::route('/create'),
            'view' => ViewAtlet::route('/{record}'),
            'edit' => EditAtlet::route('/{record}/edit'),
        ];
    }
}
