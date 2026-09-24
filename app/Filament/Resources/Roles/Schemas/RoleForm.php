<?php

namespace App\Filament\Resources\Roles\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class RoleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(fn (string $operation) => $operation === 'create'
                ? 'Create Role'
                : 'Edit Role')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('name')
                            ->label('Role Name')
                            ->placeholder('Example: Frontend')
                            ->required(),
                    ])
            ]);
    }
}
