<?php

namespace App\Filament\Widgets;

use App\Models\Skill;
use App\Models\TeamMember;
use Filament\Widgets\Widget;

class WelcomeWidget extends Widget
{
    protected static ?int $sort = -2;

    protected int | string | array $columnSpan = 'full';

    protected string $view = 'filament.widgets.welcome-widget';

    protected function getViewData(): array
    {
        return [
            'name' => auth()->user()?->name ?? 'Admin',
            'memberCount' => TeamMember::query()->count(),
            'skillCount' => Skill::query()->count(),
        ];
    }
}
