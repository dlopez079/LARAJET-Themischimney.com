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
        
        $this->selected_mechanic_id;
        $this->selected_project_id;

        // $assignment = new ProjectUser();
        //     $assignment->project_id = $this->selected_project_id;
        //     $assignment->user->id = $this->selected_mechanic_id;
        // $assignment->save();

        $project = Project::find($this->selected_project_id);  // Find the selected project ID.
        $project->users()->attach($this->selected_mechanic_id);  // 

        
    }

    public function render()
    {
        return view('livewire.assign-mechanics', [
            'users' => User::all()
        ]);
    }
}
