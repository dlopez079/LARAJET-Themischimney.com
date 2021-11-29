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
    public $assignMechanicsModal = false;
    public $project;
    // Add a listener for the anchor tag listings on Form.
    // Each anchor tag should be clickable.  
    // The click will take them to the details card.
    // Execute the method in the brackets.
    // protected $listeners = ['showProjectCard'];
    protected function getListeners()
    {
        return [
            'showAssignMechanicsModal' => 'showAssignMechanicsModal',
        ];
    }


    public function showAssignMechanicsModal(Project $project) 
    {
        // Change the public variable showModelForm from false to true because you are going from not showing the modal to showing it. 
        $this->assignMechanicsModal = true;

        // Accepted emitted project ID from the project view component and save it to a variable on this component.
        $this->selected_project_id = $project->id;
    }

    /** 
     * Create a method an call it assignMechanicToThisProject
     * 
     */ 
    public function assignMechanicToThisProject() 
    {
        // Validate the input from the User drop down that lists all mechanics
        $this->validate([
            'selected_mechanic_id' => 'required'
        ]); 

        // Look up record using the selected mechanic id.
        $user_id = User::find($this->selected_mechanic_id);

        // Look up project id that came in from project.view.
        $project = Project::find($this->selected_project_id);

        // Update the list of users assigned to this project using the pivot table.
        $project->users()->attach($user_id);

        // Save the updated record.
        $project->save();

        $this->emit('showProjectCard', $this->selected_project_id);

        $this->reset();
        
    }

    public function render()
    {
        return view('livewire.assign-mechanics', [
            'mechanics' => User::all(),
        ]);
    }
}
