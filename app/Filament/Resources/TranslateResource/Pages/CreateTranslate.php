<?php

namespace App\Filament\Resources\TranslateResource\Pages;

use App\Filament\Resources\TranslateResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTranslate extends CreateRecord
{
    protected static string $resource = TranslateResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Translate created';
    }
}
