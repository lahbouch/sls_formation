<?php

namespace App\Filament\Resources\OffreEmploiResource\Pages;

use App\Filament\Resources\OffreEmploiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOffreEmploi extends EditRecord
{
    protected static string $resource = OffreEmploiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
