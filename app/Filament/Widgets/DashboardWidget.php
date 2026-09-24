<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Contacts\ContactResource;
use App\Filament\Resources\Projects\ProjectResource;
use App\Filament\Resources\Skills\SkillResource;
use App\Filament\Resources\TeamMembers\TeamMemberResource;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Skill;
use App\Models\TeamMember;
use Filament\Widgets\Widget;

class dashboardWidget extends Widget
{
    protected static ?int $sort = -2;

    protected int | string | array $columnSpan = 'full';

    protected string $view = 'filament.widgets.dashboard-widget';

    protected function getViewData(): array
    {
        return [
            'name' => auth()->user()?->name ?? 'Admin',
            'memberCount' => TeamMember::query()->count(),
            'skillCount' => Skill::query()->count(),
            'projectCount' => Project::query()->count(),
            'contactCount' => Contact::query()->count(),
            'latestProject' => Project::query()->latest()->value('name'),
            'quickLinks' => [
                [
                    'label' => 'Tambah project',
                    'description' => 'Publikasikan karya terbaru',
                    'url' => ProjectResource::getUrl('create'),
                    'tone' => 'primary',
                ],
                [
                    'label' => 'Kelola tim',
                    'description' => 'Perbarui profil anggota',
                    'url' => TeamMemberResource::getUrl('index'),
                    'tone' => 'dark',
                ],
                [
                    'label' => 'Atur skill',
                    'description' => 'Lengkapi keahlian tim',
                    'url' => SkillResource::getUrl('index'),
                    'tone' => 'light',
                ],
                [
                    'label' => 'Kontak',
                    'description' => 'Periksa kanal komunikasi',
                    'url' => ContactResource::getUrl('index'),
                    'tone' => 'light',
                ],
            ],
        ];
    }
}
