<?php

namespace App\Filament\Resources\PembelajaranResource\Pages;

use App\Filament\Resources\PembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePembelajaran extends CreateRecord
{
    protected static string $resource = PembelajaranResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Pembelajaran created';
    }
}
