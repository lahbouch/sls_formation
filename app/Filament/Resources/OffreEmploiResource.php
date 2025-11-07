<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OffreEmploiResource\Pages;
use App\Filament\Resources\OffreEmploiResource\RelationManagers;
use App\Models\OffreEmploi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class OffreEmploiResource extends Resource
{
    protected static ?string $model = OffreEmploi::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    
    protected static ?string $navigationLabel = 'Offres d\'Emploi';
    
    protected static ?string $modelLabel = 'Offre d\'Emploi';
    
    protected static ?string $pluralModelLabel = 'Offres d\'Emploi';
    
    protected static ?int $navigationSort = 10;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('titre')
                    ->label('Titre'),
                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->directory('offres_emploi')
                    ->disk('public')
                    ->visibility('public')
                    ->imagePreviewHeight('250')
                    ->loadingIndicatorPosition('left')
                    ->panelAspectRatio('2:1'),
                Forms\Components\Textarea::make('description')
                    ->label('Description')
                    ->rows(5),
                Forms\Components\Toggle::make('active')
                    ->label('Active')
                    ->default(true),
                Forms\Components\TextInput::make('ville')
                    ->label('Ville'),
                Forms\Components\TextInput::make('domaine')
                    ->label('Domaine'),
                Forms\Components\TextInput::make('fonction')
                    ->label('Fonction'),
                Forms\Components\Select::make('contrat')
                    ->label('Contrat')
                    ->options([
                        'cdi' => 'CDI',
                        'cdd' => 'CDD',
                        'anapec' => 'ANAPEC',
                    ]),
                Forms\Components\TextInput::make('salaire')
                    ->label('Salaire'),
                Forms\Components\Select::make('niveau_etude')
                    ->label('Niveau d\'étude')
                    ->options([
                        'pas important' => 'Pas important',
                        'formation' => 'Formation',
                        'bac' => 'Bac',
                        'bac+2' => 'Bac+2',
                        'bac+3' => 'Bac+3',
                        'bac+5' => 'Bac+5',
                    ]),
                Forms\Components\TextInput::make('entreprise')
                    ->label('Entreprise'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titre')
                    ->label('Titre')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->circular(),
                Tables\Columns\IconColumn::make('active')
                    ->label('Active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('ville')
                    ->label('Ville')
                    ->searchable(),
                Tables\Columns\TextColumn::make('domaine')
                    ->label('Domaine')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fonction')
                    ->label('Fonction')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contrat')
                    ->label('Contrat')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'cdi' => 'success',
                        'cdd' => 'warning',
                        'anapec' => 'info',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('salaire')
                    ->label('Salaire')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('niveau_etude')
                    ->label('Niveau d\'étude')
                    ->searchable(),
                Tables\Columns\TextColumn::make('entreprise')
                    ->label('Entreprise')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cvs_count')
                    ->label('CVs reçus')
                    ->counts('cvs'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('active')
                    ->label('Active'),
                Tables\Filters\SelectFilter::make('contrat')
                    ->label('Contrat')
                    ->options([
                        'cdi' => 'CDI',
                        'cdd' => 'CDD',
                        'anapec' => 'ANAPEC',
                    ]),
                Tables\Filters\SelectFilter::make('niveau_etude')
                    ->label('Niveau d\'étude')
                    ->options([
                        'pas important' => 'Pas important',
                        'formation' => 'Formation',
                        'bac' => 'Bac',
                        'bac+2' => 'Bac+2',
                        'bac+3' => 'Bac+3',
                        'bac+5' => 'Bac+5',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListOffreEmplois::route('/'),
            'create' => Pages\CreateOffreEmploi::route('/create'),
            'edit' => Pages\EditOffreEmploi::route('/{record}/edit'),
        ];
    }
}
