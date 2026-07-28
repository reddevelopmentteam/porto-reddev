<?php

namespace App\Filament\Resources\Contacts\Pages;

use App\Filament\Resources\Contacts\ContactResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateContact extends CreateRecord
{
    protected static string $resource = ContactResource::class;

    protected ?string $heading = '';
    
    protected function getBreadcrubms(): array
    {
        return [];
    }

    #[Override]
    protected function getRedirectUrl(): string
    {
        return ContactResource::getUrl('index');
    }
}
