<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Project;
use App\Models\Attachment;
use App\Models\ProjectUser;
use App\Models\Team;
use App\Models\User;
use Brick\Math\BigInteger;
use App\Http\Livewire\Project\users;

class View extends Component
{

    public $project_name;
    
    public $street;
    public $city;
    public $state;
    public $zip;
    public $description;
    public $status;
    public $user_id;
    public $project;
    public $slug;
    public $selected_project;
    public $selected_project_id;
    public $selected_status;
    public $selected_street;
    public $selected_city;
    public $selected_state;
    public $selected_zip;
    public $selected_description;
    public $selected_primary_contractor;
    public $selected_general_contractor;
    public $selected_client;
    public $assignedMechanics;

    // Add a listener for the anchor tag listings on Form.
    // Each anchor tag should be clickable.  
    // The click will take them to the details card.
    // Execute the method in the brackets.
    // protected $listeners = ['showProjectCard'];
    protected function getListeners()
    {
        return [
            'showProjectCard' => 'showProjectCard', // A listener for on-click on project.show blade.
            'refreshProjectView' => '$refresh' // A listener for on-click on uploadfiles blade.
        ];
    }
    
    public function showProjectCard(Project $project) 
    {
        // Show project Card
        $this->showprojectCardContainer = true;

        // Show project ID along with Header string.
        $this->selected_project_id = $project->id;
        
        // Show project name along with header string.
        $this->selected_project = $project->project_name;

        // Show project status
        $this->selected_status = $project->status;

        // Show project $primary_contractor
        $this->selected_primary_contractor = $project->prime_id;

        // Show project $general_contractor
        $this->selected_general_contractor = $project->general_contractor_id;

        // Show project client
        $this->selected_client = $project->client_id;

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

        //Show assigned mechanics
        if($project->users) {
            $this->assignedMechanics = $project->users->pluck('name');
        } 
        
    }

    public function render()
    {

        return view('livewire.project.view',
        [ 
            // 'assignedMechanics' => $this->assignedMechanics,
            'attachments' => Attachment::all()
                ->where('project_id', $this->selected_project_id)
                ->sortDesc()
        ]);

    }
}
