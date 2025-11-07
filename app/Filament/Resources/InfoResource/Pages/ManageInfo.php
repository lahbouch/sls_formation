<?php

namespace App\Filament\Resources\InfoResource\Pages;

use App\Filament\Resources\InfoResource;
use App\Models\Info;
use Filament\Resources\Pages\ManageRecords;

class ManageInfo extends ManageRecords
{
    protected static string $resource = InfoResource::class;

    protected static ?string $title = 'Informations de Contact';

    public function mount(): void
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

        // Redirect to edit page
        $this->redirect(InfoResource::getUrl('edit'));
    }
}

