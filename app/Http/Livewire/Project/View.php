<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Project;
use App\Models\Attachment;
use App\Models\User;

class View extends Component
{

    public $project_name;
    public $general_contractor;
    // public $client;
    public $street;
    public $city;
    public $state;
    public $zip;
    public $description;
    public $status;
    public $user_id;
    public $project;
    public $showModalForm = false;
    public $slug;
    public $attachments = [];  // Array Variable to save attachments that are uploaded from form    
    public $attachment = [];  // Variable to save attachment / Required for attachment
    public $file_name; // Variable to save attachment / Required for attachment
    public $file; //Variable to save file / Required for attachment
 
    public $selected_project;
    public $selected_project_id;
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


        return view('livewire.project.view', 
        [ 

            'attachments' => Attachment::all()
                ->where('project_id', $this->selected_project_id)
                ->sortDesc(),

        ]);
    }
}
