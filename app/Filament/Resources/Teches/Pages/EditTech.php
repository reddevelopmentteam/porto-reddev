<?php

namespace App\Filament\Resources\Teches\Pages;

use App\Filament\Resources\Teches\TechResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;
use Override;

class EditTech extends EditRecord
{
    protected static string $resource = TechResource::class;

    #[Override]
    protected function getRedirectUrl(): string
    {
        return TechResource::getUrl('index');
    }
    
    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
