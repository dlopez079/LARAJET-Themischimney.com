<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class ProjectEdit extends Component
{

    

    public function render()
    {
        return view('livewire.project-edit', [
            'projects' => Project::all()
        ]);
    }
}
