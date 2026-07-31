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
                        ->label('Link Contact')
                        ->placeholder('example : https://github.com/username or mailto:red.dev@gmail.com')
                        ->required(),
                ])
            ]);
    }
}
