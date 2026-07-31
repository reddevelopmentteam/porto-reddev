<?php

namespace App\Filament\Resources\Teches\Pages;

use App\Filament\Resources\Teches\TechResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateTech extends CreateRecord
{
    protected static string $resource = TechResource::class;

    #[Override]
    protected function getRedirectUrl(): string
    {
        return TechResource::getUrl('index');
    }
}
