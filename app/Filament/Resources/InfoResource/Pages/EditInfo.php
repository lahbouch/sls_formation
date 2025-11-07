<?php

namespace App\Filament\Resources\InfoResource\Pages;

use App\Filament\Resources\InfoResource;
use App\Models\Info;
use Filament\Resources\Pages\EditRecord;

class EditInfo extends EditRecord
{
    protected static string $resource = InfoResource::class;

    protected static ?string $title = 'Informations de Contact';

    protected function getHeaderActions(): array
    {
        // No delete action for singleton resource
        return [];
    }

    public function mount(int | string | null $record = null): void
    {
        // Get or create the single info record
        $info = Info::first();
        
        if (!$info) {
            $info = Info::create([
                'phone' => null,
                'email' => null,
                'address' => null,
                'facebook_url' => 'https://www.facebook.com',
                'twitter_url' => 'https://www.twitter.com',
                'instagram_url' => 'https://www.instagram.com',
            ]);
        }

        // Always use the first record
        parent::mount($info->id);
    }
}
