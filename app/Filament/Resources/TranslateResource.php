<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TranslateResource\Pages;
use App\Filament\Resources\TranslateResource\RelationManagers;
use App\Models\Translate;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TranslateResource extends Resource
{
    protected static ?string $model = Translate::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kata_belitung')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('kata_indo')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kata_belitung')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kata_indo')
                    ->searchable(),
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
            'index' => Pages\ListTranslates::route('/'),
            'create' => Pages\CreateTranslate::route('/create'),
            'edit' => Pages\EditTranslate::route('/{record}/edit'),
        ];
    }
}
