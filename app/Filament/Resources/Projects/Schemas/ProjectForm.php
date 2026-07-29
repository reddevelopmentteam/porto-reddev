<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(fn (string $operation) => $operation === 'create'
                ? 'Create Project'
                : 'Edit Project')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->label('Project Name')
                            ->placeholder('Enter the Project Name')
                            ->required(),
                        Select::make('techs')
                            ->multiple()
                            ->relationship('techs', 'name')
                            ->placeholder('Select Technology')
                            ->label('technology used')
                            ->searchable()
                            ->preload()
                            ->required(),                        
                        FileUpload::make('img')
                            ->label('Project Images')
                            ->multiple()
                            ->image()
                            ->imageEditor()
                            ->imagePreviewHeight('250')
                            ->disk('public')
                            ->directory('projects')
                            ->preventFilePathTampering()
                            ->preserveFilenames()
                            ->columnSpanFull()
                            ->required(),
                        RichEditor::make('desc')
                            ->label('Description')
                            ->placeholder('Enter the Project Description')
                            ->extraAttributes([
                                'style' => 'min-height: 350px'
                            ])
                            ->columnSpanFull(),
                        TextInput::make('link')
                            ->label('Project Link')
                            ->placeholder('Example : https://projectname.com')
                            ->url(),
                    ])
                    ]);
    }
}
