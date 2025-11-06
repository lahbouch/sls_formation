<?php

namespace App\Filament\Resources\OffreEmploiCvResource\Pages;

use App\Filament\Resources\OffreEmploiCvResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOffreEmploiCvs extends ListRecords
{
    protected static string $resource = OffreEmploiCvResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

}
