<?php

namespace App\Filament\Resources\TranslateResource\Pages;

use App\Filament\Resources\TranslateResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTranslate extends EditRecord
{
    protected static string $resource = TranslateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getSavedNotificationTitle(): ?string
    {
        return 'Pembelajaran updated';
    } 
}
