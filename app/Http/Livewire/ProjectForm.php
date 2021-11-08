<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Attachment;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Unique;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Livewire\WithFileUploads;  // Required for attachments
use Livewire\WithPagination;

class ProjectForm extends Component
{

    use WithFileUploads;  // Required for attachments
    use WithPagination;

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
    public $current_project_id;
    

    public function showCreateProjectModal() {
        
        // Change the public variable showModelForm from false to true because you are going from not showing the modal to showing it. 
        $this->showModalForm = true;

    }

    // Create a method for storeProject for the Create Project Modal
    public function storeProject(){

        // Gather information from the Create Project Modal and enter it into MySql.
        $this->validate([
            'project_name' => 'required',
            // 'general_contractor_id' => 'required',
            // 'client' => 'required',
            'street' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'description' => 'required',
            'status' => 'required',
            'attachments.*' => 'max:102400 ', // Requiired validation for attachments
        ]);

        
        
        // Creata a new Project object and save information for MySQl
        $project =new Project();
        $project->user_id = auth()->user()->id;
        $project->project_name = $this->project_name;
        $project->slug = $this->slug;
        // $project->general_contractor_id = $this->general_contractor;
        // $project->client = $this->client;
        $project->street = $this->street;
        $project->city = $this->city;
        // $project->state = $this->state;
        $project->zip = $this->zip;
        $project->description = $this->description;
        $project->status = $this->status;

        $project->save(); 
        
        // I created a variable to save the current project ID.  I used the current project id and saved it in the attachment table as project_id in the for loop below.
        $this->current_project_id = $project->id;

        // Store the uploaded attachments in the "attachments" directory of the default filesystem disk and S3
        foreach ($this->attachments as $this->attachment) {
            $file = new Attachment(); // Create a new Attachment object that will store Store info for the attachment table in MySQL.
            $this->attachment->store('attachments', 's3'); // Save attachment on Amazon S3// Store in the "attachment" directory.
            $file->project_id = $this->current_project_id;  // Fetch the current project id and save it in the project_id column of the files table.
            $file->user_id = auth()->user()->id; // Fetch the authenticated users's id and save it to the user_id column of the files table.
            $file->file_name = $this->attachment->getClientOriginalName(); // Save the original name of the file.
            $file->file_path = $this->attachment; // Save the Amazon S3 address to file_path
            $file->save(); // Save instance onto the MySQL row.
        }
        
        
        $this->reset();
    }

    // ***** RENDER THE COMPONENT *****
    // Render the component and display results in descending order by id while paginating. 
    public function render()
    {
        return view('livewire.project-form', [
            'projects' => Project::orderBy('id', 'desc')->paginate(5)
        ]);
    }
}
