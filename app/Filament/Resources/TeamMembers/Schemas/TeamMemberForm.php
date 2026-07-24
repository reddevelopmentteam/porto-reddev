<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Grid;
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
                    ->label('Full Name')
                    ->placeholder('Enter your full name')
                    ->required(),

                TextInput::make('link')
                    ->label('Portfolio Link')
                    ->placeholder('https://github.com/username')
                    ->url()
                    ->required(),                
                Textarea::make('role')
                    ->label('Role')
                    ->placeholder("Leader, Frontend, Backend")
                    ->rows(4)
                    ->helperText('Separate each technology with commas.')
                    ->dehydrateStateUsing(fn (?string $state) => strtolower(trim($state)))
                    ->columnSpanFull()
                    ->required(),

                FileUpload::make('photo')
                    ->label('Profile Photo')
                    ->image()
                    ->imageEditor()
                    ->imagePreviewHeight('250')
                    ->panelLayout('integrated')
                    ->disk('public')
                    ->directory('team-members')
                    ->preventFilePathTampering()
                    ->preserveFilenames()
                    ->columnSpanFull()
                    ->required(),
            ]);
    }
}