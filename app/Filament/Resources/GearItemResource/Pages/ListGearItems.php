<?php

namespace App\Filament\Resources\GearItemResource\Pages;

use App\Filament\Resources\GearItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGearItems extends ListRecords
{
    protected static string $resource = GearItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
