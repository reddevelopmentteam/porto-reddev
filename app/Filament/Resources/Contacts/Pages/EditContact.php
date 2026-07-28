<?php

namespace App\Filament\Resources\Contacts\Pages;

use App\Filament\Resources\Contacts\ContactResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;
use Override;

class EditContact extends EditRecord
{
    protected static string $resource = ContactResource::class;

    protected ?string $heading = '';
    
    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }

    protected function getBreadCrubms(): array
    {
        return [];
    }

    #[Override]
    protected function getRedirectUrl(): ?string
    {
        return ContactResource::getUrl('index');
    }
}
