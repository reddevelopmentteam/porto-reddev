<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\EmbeddedSchema;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;
use UnitEnum;

class ManageSettings extends Page
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string|BackedEnum|null $activeNavigationIcon = Heroicon::Cog6Tooth;

    protected static string|UnitEnum|null $navigationGroup = 'Setting';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'General';

    protected static ?string $title = 'Web Setting';

    protected static ?string $slug = 'settings';

    /**
     * @var array<string, mixed>
     */
    public ?array $data = [];

    public ?Setting $setting = null;

    public function mount(): void
    {
        $this->setting = Setting::query()->first();

        $this->form->fill($this->setting?->attributesToArray() ?? []);
    }

    public function defaultForm(Schema $schema): Schema
    {
        return $schema
            ->model($this->setting ?? Setting::class)
            ->statePath('data');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Website Settings')
                    ->description('Configure the identity displayed on the website.')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Website Tittle')
                            ->placeholder('Contoh: Reddev Portfolio')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        FileUpload::make('logo')
                            ->label('Website Logo')
                            ->image()
                            ->imageEditor()
                            ->imagePreviewHeight('150')
                            ->disk('public')
                            ->directory('settings')
                            ->visibility('public')
                            ->panelLayout('integrated')
                            ->preventFilePathTampering(),
                        TextInput::make('copyright')
                            ->label('Copyright')
                            ->placeholder('© 2026 Reddev. All rights reserved.')
                            ->required()
                            ->maxLength(255),
                    ]),
            ]);
    }

    public function save(): void
    {
        $data = $this->form->getState();

        if ($this->setting === null) {
            $this->setting = Setting::query()->create($data);
        } else {
            $this->setting->update($data);
        }

        $this->setting->refresh();

        $this->form->fill(
            $this->setting->attributesToArray()
        );

        Notification::make()
            ->success()
            ->title('Pengaturan berhasil disimpan')
            ->send();
    }

    /**
     * @return array<Action>
     */
    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Simpan Pengaturan')
                ->submit('save')
                ->keyBindings(['mod+s']),
        ];
    }

    public function content(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([EmbeddedSchema::make('form')])
                    ->id('form')
                    ->livewireSubmitHandler('save')
                    ->footer([
                        Actions::make($this->getFormActions())
                            ->key('form-actions'),
                    ]),
            ]);
    }

    public function getTitle(): string|Htmlable
    {
        return 'Web Setting';
    }
}
