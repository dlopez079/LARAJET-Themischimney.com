<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Project;


class AssignMechanics extends Component
{

    // Establish Public Variables for component.
    public $selected_project_id; // This varialble will store the selected project id
    public $selected_mechanic_id;  // This variable will save the id for the mechanic selected on the components drop down.

    /** 
     * Create a method an call it assignMechanicToThisProject
     * 
     */ 
    public function assignMechanicToThisProject() 
    {
        $this->validate([

            'selected_mechanic_id' => 'required'
        ]); 
        
        if ($this->selected_project_id) {
            $this->project = Project::find($this->selected_project_id);  // Find the selected project ID.
            $this->project->users()->attach($this->selected_mechanic_id);  // Attach the user ID to the project 
        }
        else {
            
        }

        // The flash message below will generate successful if the validation and upload are both successful.
        session()->flash('assignedMechanicSuccessMessage', 'Assignment Successful');

        // Emit up to parent component Project Edit to refresh the selected project.
        $this->emitUp('assignedMechanic'); // Refresh the project card.
    }

    public function render()
    {
        return view('livewire.assign-mechanics', [
            'mechanics' => User::all(),
        ]);
    }
}
