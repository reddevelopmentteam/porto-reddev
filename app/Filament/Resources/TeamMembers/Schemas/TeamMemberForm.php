<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(fn (string $operation) => $operation === 'create'
                ? 'Create Member'
                : 'Edit Member'
                )
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->label('Full Name')
                            ->placeholder('Enter your full name')
                            ->required(),
        
                        TextInput::make('link')
                            ->label('Portfolio Link')
                            ->placeholder('https://github.com/username')
                            ->url()
                            ->required(),                
                        Select::make('role')
                            ->multiple()
                            ->label('Roles')
                            ->placeholder('Select Role')
                            ->options([
                                'frontend' => 'Frontend Developer',
                                'backend' => 'Backend Developer',
                                'fullstack' => 'Full Stack Developer',
                                'uiux' => 'UI/UX Designer',
                                'qa' => 'QA Engineer',
                                'devops' => 'DevOps Engineer',
                                'leader' => 'Team Leader',
                                'pm' => 'Project Manager',
                            ])
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
                    ])
            ]);
    }
}