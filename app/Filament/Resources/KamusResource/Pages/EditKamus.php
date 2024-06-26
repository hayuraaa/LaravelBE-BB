<?php

namespace App\Filament\Resources\KamusResource\Pages;

use App\Filament\Resources\KamusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKamus extends EditRecord
{
    protected static string $resource = KamusResource::class;

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
        return 'Kamus updated';
    } 
}
