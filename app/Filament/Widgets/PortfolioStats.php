<?php

namespace App\Filament\Widgets;

use App\Models\Skill;
use App\Models\TeamMember;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PortfolioStats extends StatsOverviewWidget
{
    protected static ?int $sort = -1;

    protected int | string | array $columnSpan = 'full';

    protected ?string $heading = 'Ringkasan data';

    protected ?string $description = 'Total konten yang tersedia di portofolio.';

    protected function getColumns(): int | array | null
    {
        return 2;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Total anggota', TeamMember::query()->count())
                ->description('Data anggota tim aktif')
                ->descriptionIcon(Heroicon::OutlinedUserGroup)
                ->icon(Heroicon::OutlinedUserGroup)
                ->color('primary'),
            Stat::make('Total skill', Skill::query()->count())
                ->description('Keahlian yang ditampilkan')
                ->descriptionIcon(Heroicon::OutlinedCodeBracket)
                ->icon(Heroicon::OutlinedCommandLine)
                ->color('success'),
        ];
    }
}
