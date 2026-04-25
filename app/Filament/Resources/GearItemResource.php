<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GearItemResource\Pages;
use App\Models\GearItem;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class GearItemResource extends Resource
{
    protected static ?string $model = GearItem::class;
    protected static ?string $label = 'Verwaltung';
    protected static ?string $pluralLabel = 'Verwaltung';
    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')
                ->label('Name')
                ->required(),

            TextInput::make('category')
                ->label('Kategorie')
                ->required(),

            Select::make('condition')
                ->label('Zustand')
                ->options([
                    'new'    => 'Neu',
                    'good'   => 'Gut',
                    'worn'   => 'Abgenutzt',
                    'broken' => 'Kaputt',
                ])
                ->required(),

            DatePicker::make('purchase_date')
                ->label('Kaufdatum')
                ->required(),

            TextInput::make('value')
                ->label('Wert (€)')
                ->numeric()
                ->required(),

            Textarea::make('notes')
                ->label('Notizen')
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->searchable(),

                Tables\Columns\TextColumn::make('category')
                    ->label('Kategorie')
                    ->searchable(),

                Tables\Columns\TextColumn::make('condition')
                    ->label('Zustand')
                    ->formatStateUsing(fn (string $state): string => match($state) {
                        'new'    => 'Neu',
                        'good'   => 'Gut',
                        'worn'   => 'Abgenutzt',
                        'broken' => 'Kaputt',
                        default  => $state,
                    }),

                Tables\Columns\TextColumn::make('value')
                    ->label('Wert')
                    ->money('EUR'),

                Tables\Columns\TextColumn::make('purchase_date')
                    ->label('Kaufdatum')
                    ->date(),
            ])
            ->searchPlaceholder('Suchen...')
            ->emptyStateHeading('Keine Einträge')
            ->emptyStateDescription('Erstelle einen neuen Eintrag.');
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListGearItems::route('/'),
            'create' => Pages\CreateGearItem::route('/create'),
            'view'   => Pages\ViewGearItem::route('/{record}'),
            'edit'   => Pages\EditGearItem::route('/{record}/edit'),
        ];
    }
}