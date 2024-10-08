<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use App\ProjectStatus;

use Livewire\Component;

class Proposals extends Component
{
    public Project $project;

    public function render()
    {
        return view('livewire.projects.proposals');
    }
}
