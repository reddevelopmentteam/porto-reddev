<?php

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\TeamMember;
use App\Models\Skill;

new #[Layout('layouts.app')]  class extends Component
{
    public $teamMembers;
    public $skills;

    public function mount()
    {   
        $this->skills = Skill::all();
        $this->teamMembers = TeamMember::orderBy('name')->get();
    }
};