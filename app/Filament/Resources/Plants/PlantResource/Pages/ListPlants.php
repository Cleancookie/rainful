<?php

namespace App\Filament\Resources\Plants\PlantResource\Pages;

use App\Filament\Resources\Plants\PlantResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlants extends ListRecords
{
    protected static string $resource = PlantResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
