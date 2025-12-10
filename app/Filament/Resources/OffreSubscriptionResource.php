<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OffreSubscriptionResource\Pages;
use App\Filament\Resources\OffreSubscriptionResource\RelationManagers;
use App\Models\OffreSubscription;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OffreSubscriptionResource extends Resource
{
    protected static ?string $model = OffreSubscription::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';
    
    protected static ?string $navigationLabel = 'Inscriptions aux Offres';
    
    protected static ?string $modelLabel = 'Inscription';
    
    protected static ?string $pluralModelLabel = 'Inscriptions';
    
    protected static ?string $navigationGroup = 'Services & Formations';
    
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('offre_id')
                    ->label('Offre')
                    ->relationship('offre', 'intitule')
                    ->getOptionLabelFromRecordUsing(function ($record) {
                        return ($record->type ? $record->type->code . $record->num . ' - ' : '') . ($record->intitule ?: "Offre #{$record->id}");
                    })
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->label('Nom complet')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->label('Téléphone')
                    ->required()
                    ->tel()
                    ->maxLength(50),
                Forms\Components\Textarea::make('note')
                    ->label('Note')
                    ->rows(4)
                    ->maxLength(1000),
                Forms\Components\Toggle::make('confirmed')
                    ->label('Confirmé')
                    ->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('offre.intitule')
                    ->label('Offre')
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(function ($record) {
                        $offre = $record->offre;
                        return ($offre->type ? $offre->type->code . $offre->num . ' - ' : '') . ($offre->intitule ?: "Offre #{$offre->id}");
                    }),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Téléphone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('note')
                    ->label('Note')
                    ->limit(50)
                    ->wrap(),
                Tables\Columns\IconColumn::make('confirmed')
                    ->label('Confirmé')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Date d\'inscription')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('offre_id')
                    ->label('Offre')
                    ->relationship('offre', 'intitule')
                    ->searchable()
                    ->preload(),
                Tables\Filters\TernaryFilter::make('confirmed')
                    ->label('Confirmé')
                    ->placeholder('Tous')
                    ->trueLabel('Confirmés uniquement')
                    ->falseLabel('Non confirmés uniquement'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOffreSubscriptions::route('/'),
            'create' => Pages\CreateOffreSubscription::route('/create'),
            'edit' => Pages\EditOffreSubscription::route('/{record}/edit'),
        ];
    }
    
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('confirmed', false)->count() ?: null;
    }
    
    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }
}
