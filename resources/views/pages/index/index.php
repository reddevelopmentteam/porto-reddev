<?php

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\TeamMember;
use App\Models\Skill;
use App\Models\Contact;
use App\Models\Project;

new #[Layout('layouts.app')]  class extends Component
{
    public $teamMembers;
    public $skills;
    public $contacts;
    public $projects;

    public function mount()
    {
        $this->skills = Skill::all();
        $this->contacts = Contact::all();

        // Ambil project beserta relasi techs
        $this->projects = Project::with('techs')->get();

        $this->teamMembers = TeamMember::orderBy('name')->get();
    }
};