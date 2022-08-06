<?php

namespace App\Filament\Resources\Plants\PlantResource\Pages;

use App\Filament\Resources\Plants\PlantResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePlant extends CreateRecord
{
    protected static string $resource = PlantResource::class;
}
