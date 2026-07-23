<?php

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\TeamMember;

new #[Layout('layouts.app')]  class extends Component
{
    public $teamMembers;

    public function mount()
    {
        $this->teamMembers = TeamMember::orderBy('name')->get();
    }
};