<?php

namespace App\Filament\Resources\Teches\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TechForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->columnSpanFull()
                    ->columns()
                    ->schema([
                        TextInput::make('name')
                            ->label('Technology Name')
                            ->placeholder('Example: Alpine.js')
                            ->required(),
                        TextInput::make('slug')
                            ->placeholder('Example: alpinejs')
                            ->required(),
                        TextInput::make('icon')
                            ->label('Icon Technology')
                            ->placeholder('Example: mdi:evenlop')
                            ->required(),
                    ])

            ]);
    }
}
