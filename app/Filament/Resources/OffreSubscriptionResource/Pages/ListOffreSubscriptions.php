<?php

namespace App\Filament\Resources\OffreSubscriptionResource\Pages;

use App\Filament\Resources\OffreSubscriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOffreSubscriptions extends ListRecords
{
    protected static string $resource = OffreSubscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
