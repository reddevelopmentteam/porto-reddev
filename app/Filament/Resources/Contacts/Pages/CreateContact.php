<?php

namespace App\Filament\Resources\Contacts\Pages;

use App\Filament\Resources\Contacts\ContactResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateContact extends CreateRecord
{
    protected static string $resource = ContactResource::class;

    #[Override]
    protected function getRedirectUrl(): string
    {
        return ContactResource::getUrl('index');
    }
}
