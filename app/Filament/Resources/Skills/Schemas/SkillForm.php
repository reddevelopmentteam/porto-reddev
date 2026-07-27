<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(fn (string $operation) => $operation === 'create' ? 'Create Skill' : 'Edit Skill'  )
                ->columnSpanFull()
                ->columns(2)
                ->schema([
                    TextInput::make('name')
                        ->label('Skill Name')
                        ->placeholder('Example : Laravel')
                        ->required(),
                    TextInput::make('icon')
                        ->label('Icon Name')
                        ->placeholder('Example: mdi:home')
                        ->dehydrateStateUsing(fn (?string $state) => strtolower(trim($state)))
                        ->required(),
                    Select::make('category')
                    ->options([
                        'Programming Languages' => 'Programming Languages',
                        'Frameworks & Libraries' => 'Frameworks & Libraries',
                        'Database' => 'Database',
                        'Tools' => 'Tools',
                        'DevOps & Deployment' => 'DevOps & Deployment',
                        'UI/UX' => 'UI/UX',
                        'Cybersecurity' => 'Cybersecurity',
                        'Soft Skills' => 'Soft Skills',
                    ])
                    ->required(),
                ])
            ]);
    }
}
