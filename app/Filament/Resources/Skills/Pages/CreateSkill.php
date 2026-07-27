<?php

namespace App\Filament\Resources\Skills\Pages;

use App\Filament\Resources\Skills\SkillResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateSkill extends CreateRecord
{
    protected static string $resource = SkillResource::class;

    protected ?string $heading = '';

    protected function getBreadcrubms(): array
    {
        return [];
    }
    
    #[Override]
    protected function getRedirectUrl(): string
    {
        return SkillResource::getUrl('index');
    }
}
