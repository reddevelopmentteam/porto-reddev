<?php

namespace App\Filament\Resources\TeamMembers\Pages;

use App\Filament\Resources\TeamMembers\TeamMemberResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateTeamMember extends CreateRecord
{
    protected static string $resource = TeamMemberResource::class;

    protected ?string $heading = '';

    protected function getBreadcrubms(): array
    {
        return [];
    }

    #[Override]
    protected function getRedirectUrl(): string
    {
        return TeamMemberResource::getUrl('index');
    }
}
