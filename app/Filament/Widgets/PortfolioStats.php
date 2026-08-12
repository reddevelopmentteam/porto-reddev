<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Projects\ProjectResource;
use App\Filament\Resources\Roles\RoleResource;
use App\Filament\Resources\Teches\TechResource;
use App\Models\Project;
use App\Models\Role;
use App\Models\Tech;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PortfolioStats extends StatsOverviewWidget
{
    protected static ?int $sort = -1;

    protected int | string | array $columnSpan = 'full';

    protected ?string $heading = 'Kesiapan konten';

    protected ?string $description = 'Indikator penting untuk menjaga portofolio tetap lengkap dan siap ditampilkan.';

    protected function getColumns(): int | array | null
    {
        return 3;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Project dengan tautan', Project::query()->whereNotNull('link')->count())
                ->description('Karya yang memiliki tautan tujuan')
                ->descriptionIcon(Heroicon::OutlinedLink)
                ->icon(Heroicon::OutlinedLink)
                ->url(ProjectResource::getUrl('index'))
                ->color('primary'),
            Stat::make('Teknologi terdaftar', Tech::query()->count())
                ->description('Stack yang dapat dipakai pada project')
                ->descriptionIcon(Heroicon::OutlinedCpuChip)
                ->icon(Heroicon::OutlinedCpuChip)
                ->url(TechResource::getUrl('index'))
                ->color('success'),
            Stat::make('Peran tim', Role::query()->count())
                ->description('Struktur peran yang telah didefinisikan')
                ->descriptionIcon(Heroicon::OutlinedIdentification)
                ->icon(Heroicon::OutlinedIdentification)
                ->url(RoleResource::getUrl('index'))
                ->color('warning'),
        ];
    }
}
