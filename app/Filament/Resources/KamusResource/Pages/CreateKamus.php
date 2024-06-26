<?php

namespace App\Filament\Resources\KamusResource\Pages;

use App\Filament\Resources\KamusResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKamus extends CreateRecord
{
    protected static string $resource = KamusResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Kamus created';
    }
}
