<?php

namespace App\Filament\Resources\Projects\Pages;

use App\Filament\Resources\Projects\ProjectResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateProject extends CreateRecord
{
    protected static string $resource = ProjectResource::class;

    #[Override]
    protected function getRedirectUrl(): string
    {
        return ProjectResource::getUrl('index');
    }
}
