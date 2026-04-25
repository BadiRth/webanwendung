<?php

namespace App\Filament\Resources\GearItemResource\Pages;

use App\Filament\Resources\GearItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewGearItem extends ViewRecord
{
    protected static string $resource = GearItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
