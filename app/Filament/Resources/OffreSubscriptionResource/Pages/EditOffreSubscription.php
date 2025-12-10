<?php

namespace App\Filament\Resources\OffreSubscriptionResource\Pages;

use App\Filament\Resources\OffreSubscriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOffreSubscription extends EditRecord
{
    protected static string $resource = OffreSubscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
