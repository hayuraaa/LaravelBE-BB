<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PembelajaranResource\Pages;
use App\Filament\Resources\PembelajaranResource\RelationManagers;
use App\Models\Pembelajaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PembelajaranResource extends Resource
{
    protected static ?string $model = Pembelajaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'Future';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul-modul')
                    ->required()
                    ->maxLength(255)
                    ->live(debounce:'100')
                    ->afterStateUpdated(function($set, $state) {
                        $set('slug', Str::slug($state));
                    }),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('sampul')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('penjelasan-modul')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('kontent-modul')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('pdf')
                    ->required()
                    ->label('embed from canva'),
                Forms\Components\TextInput::make('viedo')
                    ->required()
                    ->maxLength(555),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('Modul Ke'),
                Tables\Columns\TextColumn::make('judul-modul')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('sampul'),
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
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPembelajarans::route('/'),
            'create' => Pages\CreatePembelajaran::route('/create'),
            'edit' => Pages\EditPembelajaran::route('/{record}/edit'),
        ];
    }
}
