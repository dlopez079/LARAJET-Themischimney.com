<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Attachment;
use App\Models\User;


class ProjectEdit extends Component
{

    // Established the public variable needed to save data.
    public $selected_project_id;
    public $selected_project;
    public $selected_status;
    public $selected_street;
    public $selected_city;
    public $selected_state;
    public $selected_zip;
    // public $selected_contact;
    // public $selected_phone;
    // public $selected_email;
    // public $selected_website;
    public $selected_description;
    public $showProjectCard; 

    // Add a listener for the anchor tag listings on Form.
    // Each anchor tag should be clickable.  
    // The click will take them to the details card.
    // Execute the method in the brackets.
    // protected $listeners = ['showProjectCard'];
    protected function getListeners()
    {
        return [
            'showProjectCard' => 'showProjectCard',
            'attachmentsAdded' => '$refresh',
            'assignedMechanic' => '$refresh'
        ];
    }

    // *****SHOW PROJECT CARD UNDERNEATH project LIST*****
    // This function/method is responsible for displaying the individual project card.
    // This function/method activates when you click on row of the project table.
    // The project card is where you will see all details of the project.
    public function showProjectCard(Project $project) {

        // Show project Card
        $this->showprojectCardContainer = true;

        // Show project ID along with Header string.
        $this->selected_project_id = $project->id;
        
        // Show project name along with header string.
        $this->selected_project = $project->project_name;

        // Show project status
        $this->selected_status = $project->status;

        // Show project contact NOT BEING USED NOW
        // $this->selected_contact = $project->contact;

        // Show project street
        $this->selected_street = $project->street.",";

        // Show project city
        $this->selected_city = $project->city.",";

        // Show project state
        $this->selected_state = $project->state;

        // Show project zip
        $this->selected_zip = $project->zip;

        // Show project description
        $this->selected_description = $project->description;

    }
  
    public function render()
    {
        $project = Project::find(1);
        $user = User::find(1);

        return view('livewire.project-edit', [ 
            'project' => $project,
            'user' => $user,
            'attachments' => Attachment::all()
                ->where('project_id', $this->selected_project_id)
                ->sortDesc(),

        ]);

        // return view('livewire.project-edit', [
        //     'attachments' => Attachment::all()
        //     ->where('project_id', $this->selected_project_id)
        //     ->sortDesc(),
        //     'assignedMechanics' => User::all()
        //     ->where('project_id', $this->selected_project_id)
        //     ->sortDesc()
        // ]);
    }
}
