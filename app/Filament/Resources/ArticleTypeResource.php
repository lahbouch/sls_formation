<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleTypeResource\Pages;
use App\Filament\Resources\ArticleTypeResource\RelationManagers;
use App\Models\ArticleType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticleTypeResource extends Resource
{
    protected static ?string $model = ArticleType::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';
    
    protected static ?string $navigationLabel = 'Catégories d\'Articles';
    
    protected static ?string $modelLabel = 'Catégorie d\'Article';
    
    protected static ?string $pluralModelLabel = 'Catégories d\'Articles';
    
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('nom')
                    ->label('Nom')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'link',
                        'h2',
                        'h3',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom')
                    ->label('Nom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('articles_count')
                    ->label('Articles')
                    ->counts('articles'),
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
                //
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
            'index' => Pages\ListArticleTypes::route('/'),
            'create' => Pages\CreateArticleType::route('/create'),
            'edit' => Pages\EditArticleType::route('/{record}/edit'),
        ];
    }
}
