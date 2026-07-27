<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(fn (string $operation) => $operation === 'create' ? 'Create Contact' : 'Edit Contact')
                ->columnSpanFull()
                ->columns(2)
                ->schema([
                    TextInput::make('name')
                        ->label('Contact Name')
                        ->placeholder('Enter your full name')
                        ->required(),
                    TextInput::make('link')
                        ->url()
                        ->placeholder('https://github.com/username')
                        ->required(),
                    TextInput::make('icon')
                        ->label('Icon Name')
                        ->placeholder('Example: mdi:home')
                        ->dehydrateStateUsing(fn (?string $state) => strtolower(trim($state)))
                        ->required(),
                ])
            ]);
    }
}
