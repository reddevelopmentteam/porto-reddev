<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Support\Icons\Heroicon;
use Filament\Forms\Components\FileUpload;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('name')
                    ->label('Product Name')
                    ->placeholder('Enter product name...')
                    ->required(),

                RichEditor::make('deskripsi')
                    ->label('Description')
                    ->placeholder('Write the product description...')
                    ->extraAttributes([
                        'style' => 'min-height: 450px;',
                    ])
                    ->columnSpanFull()
                    ->required(),

                Textarea::make('tech')
                    ->label('Technologies')
                    ->placeholder('Laravel, Livewire, Filament, Tailwind CSS')
                    ->rows(4)
                    ->helperText('Separate each technology with commas.')
                    ->columnSpanFull()
                    ->required(),

                FileUpload::make('photo')
                    ->label('Thumbnail')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('products')
                    ->preserveFilenames()
                    ->preventFilePathTampering()
                    ->panelLayout('integrated')
                    ->imagePreviewHeight('300')
                    ->columnSpanFull()
                    ->required(),

                Toggle::make('is_active')
                    ->label('Publish Product')
                    ->inline(false)
                    ->default(true)
                    ->onIcon(Heroicon::Eye)
                    ->offIcon(Heroicon::EyeSlash)
                    ->onColor('success'),
            ]);
    }
}
