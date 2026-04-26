<?php

namespace App\Filament\Resources\GearItemResource\Pages;

use App\Filament\Resources\GearItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewGearItem extends ViewRecord
{
    protected static string $resource = GearItemResource::class;

    public function getTitle(): string|\Illuminate\Contracts\Support\Htmlable
    {
        return $this->record->name;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}