<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Project;

use Livewire\WithPagination; // Required to paginate the list of projects. 

class Show extends Component
{
    use WithPagination; // Required to paginate the list of projects. 


    // ***** RENDER THE COMPONENT *****
    // Render the component and display results in descending order by id while paginating. 
    public function render()
    {
        return view('livewire.project.show', [
            'projects' => Project::orderBy('id', 'desc')->paginate(5),
        ]);
    }
}
