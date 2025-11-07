<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OffreResource\Pages;
use App\Filament\Resources\OffreResource\RelationManagers;
use App\Models\Offre;
use App\Models\Type;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class OffreResource extends Resource
{
    protected static ?string $model = Offre::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    
    protected static ?string $navigationLabel = 'Offres de Formation';
    
    protected static ?string $modelLabel = 'Offre de Formation';
    
    protected static ?string $pluralModelLabel = 'Offres de Formation';
    
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type_id')
                    ->label('Type de Service')
                    ->relationship('type', 'nom')
                    ->getOptionLabelFromRecordUsing(function ($record) {
                        return $record->nom ?: "Type #{$record->id}";
                    })
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\TextInput::make('num')
                    ->label('Numéro')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(3),
                Forms\Components\TextInput::make('titre')
                    ->label('Titre'),
                Forms\Components\TextInput::make('intitule')
                    ->label('Intitulé'),
                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->directory('offres')
                    ->disk('public')
                    ->visibility('public')
                    ->imagePreviewHeight('250')
                    ->loadingIndicatorPosition('left')
                    ->panelAspectRatio('2:1'),
                Forms\Components\RichEditor::make('objectif')
                    ->label('Objectif')
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'italic',
                        'link',
                        'orderedList',
                        'strike',
                        'underline',
                    ])
                    ->fileAttachmentsDirectory('rich-editor')
                    ->fileAttachmentsDisk('public'),
                Forms\Components\RichEditor::make('prerequis')
                    ->label('Prérequis')
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'italic',
                        'link',
                        'orderedList',
                        'strike',
                        'underline',
                    ])
                    ->fileAttachmentsDirectory('rich-editor')
                    ->fileAttachmentsDisk('public'),
                Forms\Components\RichEditor::make('programme')
                    ->label('Programme')
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'italic',
                        'link',
                        'orderedList',
                        'strike',
                        'underline',
                    ])
                    ->fileAttachmentsDirectory('rich-editor')
                    ->fileAttachmentsDisk('public'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type.nom')
                    ->label('Type de Service')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('num')
                    ->label('Numéro')
                    ->sortable(),
                Tables\Columns\TextColumn::make('titre')
                    ->label('Titre')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('intitule')
                    ->label('Intitulé')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->circular(),
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
                Tables\Filters\SelectFilter::make('type_id')
                    ->label('Type de Service')
                    ->relationship('type', 'nom'),
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
            'index' => Pages\ListOffres::route('/'),
            'create' => Pages\CreateOffre::route('/create'),
            'edit' => Pages\EditOffre::route('/{record}/edit'),
        ];
    }
}
