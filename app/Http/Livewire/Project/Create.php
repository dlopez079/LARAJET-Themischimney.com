<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;
use App\Models\Project;
use App\Models\Attachment;
use Livewire\WithFileUploads;  // Required for attachments
use Livewire\WithPagination; // Required to paginate the list of projects. 

class Create extends Component
{

    
    use WithFileUploads;  // Required for attachments
    use WithPagination; // Required to paginate the list of projects. 

    // Created to capture the value from the form.
    public $project_name; 
    public $client;
    public $primary_contractor;
    public $general_contractor;
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
    public $selected_project_id;

    protected function getListeners()
    {
        return [
            'showCreateProjectModal' => 'showCreateProjectModal',
        ];
    }

    public function showCreateProjectModal() {
        
        // Change the public variable showModelForm from false to true because you are going from not showing the modal to showing it. 
        $this->showModalForm = true;

    }

     // Create a method for storeProject for the Create Project Modal
     public function storeProject() {

        // Gather information from the Create Project Modal and enter it into MySql.
        $this->validate([
            'project_name' => 'required',
            'client' => 'required',
            'primary_contractor' => 'required',
            'general_contractor' => 'required',
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
        $project->client_id = $this->client;
        $project->prime_id = $this->primary_contractor;
        $project->general_contractor_id = $this->general_contractor;
        $project->street = $this->street;
        $project->city = $this->city;
        // $project->state = $this->state;  NOT REQUIRED RIGHT NOW BECAUSE THE CLIENTS ARE ONLY IN NYC.
        $project->zip = $this->zip;
        $project->description = $this->description;
        $project->status = $this->status;

        $project->save(); 
        
        // I created a variable to save the selected project ID.  I used the selected project id and saved it in the attachment table as project_id in the for loop below.
        $this->selected_project_id = $project->id;

        // Store the uploaded attachments in the "attachments" directory of the default filesystem disk and S3
        foreach ($this->attachments as $attachment) {
            
            
            $fileName = date("Ymd-hi").'-'.$attachment->getClientOriginalName(); // Save the original name of the file along with a time stamp in a variable called fileName
            
            $path = $attachment->storeAs('attachments', strval($fileName), 's3-public'); // Save attachment on Amazon S3// Store in the "attachment" directory of the local-themischimney.com bucket with original file name.  The file name must be a string so I obtain the string value from the variable.
            
            $url = 'https://'.env('AWS_BUCKET_PUBLIC').'.s3.amazonaws.com/'.$path; // Put the URL together for the file just uploaded.

            // Create an objec that will include the current parent component object and along with the fileName and $url
            $fileRecord = new Attachment(); // Create a new Attachment object that will store info for the attachment table in MySQL.
                $fileRecord->project_id = $this->selected_project_id;  // Fetch the selected project id and save it in the project_id column of the files table.
                $fileRecord->user_id = auth()->user()->id; // Fetch the authenticated users's id and save it to the user_id column of the files table.
                $fileRecord->file_name = $fileName; // Save the original name of the file.
                $fileRecord->file_path = $url; // Save the Amazon S3 address to file_path
            $fileRecord->save(); // Save instance onto the MySQL row.
            
            
        }
        
        // The flash message below will generate successful if the validation and upload are both successful.
        session()->flash('message', 'You successfully saved the file to the project.');
            
        // Emit to project edit to refresh the selected project.  
        return redirect()->to('/projects');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.project.create');
    }
}
