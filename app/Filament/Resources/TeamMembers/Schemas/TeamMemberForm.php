<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->placeholder('Enter Your Full Name')
                    ->required(),
                Textarea::make('role')
                    ->placeholder('Example : Leader, Frontend, Backend')
                    ->dehydrateStateUsing(fn ($state) => strtolower($state))
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('photo')
                    ->preventFilePathTampering()
                    ->preserveFilenames()
                    ->image()
                    ->disk('public')
                    ->directory('team-members')
                    ->imageEditor()
                    ->required(),
                TextInput::make('link')
                    ->placeholder('Enter your Portfolio Link')
                    ->required(),
            ]);
    }
}
