<?php

namespace App\Filament\Resources\Roles\Pages;

use App\Filament\Resources\Roles\RoleResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateRole extends CreateRecord
{
    protected static string $resource = RoleResource::class;

    #[Override]
    protected function getRedirectUrl(): string
    {
        return RoleResource::getUrl('index');
    }
}
