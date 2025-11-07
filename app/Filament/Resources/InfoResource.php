<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InfoResource\Pages;
use App\Filament\Resources\InfoResource\RelationManagers;
use App\Models\Info;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InfoResource extends Resource
{
    protected static ?string $model = Info::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    
    protected static ?string $navigationLabel = 'Informations de Contact';
    
    protected static ?string $modelLabel = 'Information de Contact';
    
    protected static ?string $pluralModelLabel = 'Informations de Contact';
    
    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('phone')
                    ->label('Téléphone')
                    ->tel(),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email(),
                Forms\Components\TextInput::make('address')
                    ->label('Adresse'),
                Forms\Components\Section::make('Réseaux Sociaux')
                    ->schema([
                        Forms\Components\TextInput::make('facebook_url')
                            ->label('URL Facebook')
                            ->url()
                            ->placeholder('https://www.facebook.com/...'),
                        Forms\Components\TextInput::make('twitter_url')
                            ->label('URL Twitter')
                            ->url()
                            ->placeholder('https://www.twitter.com/...'),
                        Forms\Components\TextInput::make('instagram_url')
                            ->label('URL Instagram')
                            ->url()
                            ->placeholder('https://www.instagram.com/...'),
                    ])
                    ->columns(1),
            ]);
    }

    // Removed table() method - this is a singleton resource

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageInfo::route('/'),
            'edit' => Pages\EditInfo::route('/edit'),
        ];
    }
}
