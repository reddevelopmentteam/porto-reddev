<?php

namespace App\Filament\Resources\Skills\Pages;

use App\Filament\Resources\Skills\SkillResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateSkill extends CreateRecord
{
    protected static string $resource = SkillResource::class;
    
    #[Override]
    protected function getRedirectUrl(): string
    {
        return SkillResource::getUrl('index');
    }
}
