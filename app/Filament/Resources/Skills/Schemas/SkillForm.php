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
                    Select::make('categories')
                        ->relationship('categories', 'name')
                        ->label('Skill Categories')
                        ->searchable()
                        ->placeholder('Select Category')
                        ->preload()
                        ->required(),
                ])
            ]);
    }
}
