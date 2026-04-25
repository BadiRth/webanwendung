<?php

namespace App\Filament\Resources\GearItemResource\Pages;

use App\Filament\Resources\GearItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGearItem extends EditRecord
{
    protected static string $resource = GearItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
