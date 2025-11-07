<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OffreEmploiCvResource\Pages;
use App\Filament\Resources\OffreEmploiCvResource\RelationManagers;
use App\Models\OffreEmploiCv;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class OffreEmploiCvResource extends Resource
{
    protected static ?string $model = OffreEmploiCv::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    
    protected static ?string $navigationLabel = 'CVs des Candidats';
    
    protected static ?string $modelLabel = 'CV Candidat';
    
    protected static ?string $pluralModelLabel = 'CVs des Candidats';
    
    protected static ?int $navigationSort = 11;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('offre_emploi_id')
                    ->label('Offre d\'emploi')
                    ->relationship('offreEmploi', 'titre')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\FileUpload::make('cv')
                    ->label('CV (PDF)')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('cvs')
                    ->disk('public')
                    ->visibility('public')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('offreEmploi.titre')
                    ->label('Offre d\'emploi')
                    ->searchable()
                    ->sortable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('offreEmploi.ville')
                    ->label('Ville')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('offreEmploi.domaine')
                    ->label('Domaine')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('offreEmploi.fonction')
                    ->label('Fonction')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('offreEmploi.contrat')
                    ->label('Contrat')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'cdi' => 'success',
                        'cdd' => 'warning',
                        'anapec' => 'info',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('offreEmploi.salaire')
                    ->label('Salaire')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('offreEmploi.niveau_etude')
                    ->label('Niveau d\'étude')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('offreEmploi.entreprise')
                    ->label('Entreprise')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('offreEmploi.active')
                    ->label('Offre active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('cv')
                    ->label('CV')
                    ->formatStateUsing(fn ($state) => 'Télécharger')
                    ->url(fn ($record) => $record->cv ? Storage::disk('public')->url($record->cv) : null)
                    ->openUrlInNewTab()
                    ->icon('heroicon-o-arrow-down-tray'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Date de candidature')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filtersLayout(Tables\Enums\FiltersLayout::AboveContentCollapsible)
            ->persistFiltersInSession()
            ->filters([
                Tables\Filters\SelectFilter::make('offre_emploi_id')
                    ->label('Offre d\'emploi')
                    ->relationship('offreEmploi', 'titre')
                    ->searchable()
                    ->preload()
                    ->multiple(),
                Tables\Filters\Filter::make('offre_emploi_ville')
                    ->label('Ville')
                    ->form([
                        Forms\Components\TextInput::make('ville')
                            ->label('Ville'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                            $data['ville'],
                            fn (Builder $query, $ville): Builder => $query->whereHas('offreEmploi', function ($q) use ($ville) {
                                $q->where('ville', 'like', "%{$ville}%");
                            })
                        );
                    }),
                Tables\Filters\Filter::make('offre_emploi_domaine')
                    ->label('Domaine')
                    ->form([
                        Forms\Components\TextInput::make('domaine')
                            ->label('Domaine'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                            $data['domaine'],
                            fn (Builder $query, $domaine): Builder => $query->whereHas('offreEmploi', function ($q) use ($domaine) {
                                $q->where('domaine', 'like', "%{$domaine}%");
                            })
                        );
                    }),
                Tables\Filters\Filter::make('offre_emploi_fonction')
                    ->label('Fonction')
                    ->form([
                        Forms\Components\TextInput::make('fonction')
                            ->label('Fonction'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                            $data['fonction'],
                            fn (Builder $query, $fonction): Builder => $query->whereHas('offreEmploi', function ($q) use ($fonction) {
                                $q->where('fonction', 'like', "%{$fonction}%");
                            })
                        );
                    }),
                Tables\Filters\SelectFilter::make('offre_emploi_contrat')
                    ->label('Contrat')
                    ->relationship('offreEmploi', 'contrat')
                    ->options([
                        'cdi' => 'CDI',
                        'cdd' => 'CDD',
                        'anapec' => 'ANAPEC',
                    ]),
                Tables\Filters\SelectFilter::make('offre_emploi_niveau_etude')
                    ->label('Niveau d\'étude')
                    ->relationship('offreEmploi', 'niveau_etude')
                    ->options([
                        'pas important' => 'Pas important',
                        'formation' => 'Formation',
                        'bac' => 'Bac',
                        'bac+2' => 'Bac+2',
                        'bac+3' => 'Bac+3',
                        'bac+5' => 'Bac+5',
                    ]),
                Tables\Filters\TernaryFilter::make('offre_emploi_active')
                    ->label('Offre active')
                    ->queries(
                        true: fn (Builder $query) => $query->whereHas('offreEmploi', fn ($q) => $q->where('active', true)),
                        false: fn (Builder $query) => $query->whereHas('offreEmploi', fn ($q) => $q->where('active', false)),
                    ),
                Tables\Filters\Filter::make('offre_emploi_salaire')
                    ->label('Salaire')
                    ->form([
                        Forms\Components\TextInput::make('salaire')
                            ->label('Salaire'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                            $data['salaire'],
                            fn (Builder $query, $salaire): Builder => $query->whereHas('offreEmploi', function ($q) use ($salaire) {
                                $q->where('salaire', 'like', "%{$salaire}%");
                            })
                        );
                    }),
                Tables\Filters\Filter::make('offre_emploi_entreprise')
                    ->label('Entreprise')
                    ->form([
                        Forms\Components\TextInput::make('entreprise')
                            ->label('Entreprise'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                            $data['entreprise'],
                            fn (Builder $query, $entreprise): Builder => $query->whereHas('offreEmploi', function ($q) use ($entreprise) {
                                $q->where('entreprise', 'like', "%{$entreprise}%");
                            })
                        );
                    }),
                Tables\Filters\Filter::make('offre_emploi_description')
                    ->label('Description')
                    ->form([
                        Forms\Components\TextInput::make('description')
                            ->label('Description'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                            $data['description'],
                            fn (Builder $query, $description): Builder => $query->whereHas('offreEmploi', function ($q) use ($description) {
                                $q->where('description', 'like', "%{$description}%");
                            })
                        );
                    }),
                Tables\Filters\Filter::make('offre_emploi_titre')
                    ->label('Titre de l\'offre')
                    ->form([
                        Forms\Components\TextInput::make('titre')
                            ->label('Titre'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                            $data['titre'],
                            fn (Builder $query, $titre): Builder => $query->whereHas('offreEmploi', function ($q) use ($titre) {
                                $q->where('titre', 'like', "%{$titre}%");
                            })
                        );
                    }),
                Tables\Filters\Filter::make('offre_emploi_created_at')
                    ->label('Date de publication')
                    ->form([
                        Forms\Components\DatePicker::make('created_from')
                            ->label('Du'),
                        Forms\Components\DatePicker::make('created_until')
                            ->label('Au'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereHas('offreEmploi', function ($q) use ($date) {
                                    $q->whereDate('created_at', '>=', $date);
                                })
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereHas('offreEmploi', function ($q) use ($date) {
                                    $q->whereDate('created_at', '<=', $date);
                                })
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListOffreEmploiCvs::route('/'),
            'view' => Pages\ViewOffreEmploiCv::route('/{record}'),
        ];
    }
}
