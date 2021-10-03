<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Unique;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ProjectForm extends Component
{

    public $project_name;
    public $general_contractor;
    public $client;
    public $street;
    public $city;
    public $state;
    public $zip;
    public $description;
    public $status;
    public $user_id;
    public $count;
    public $showModalForm = false;
    public $slug;
    // public $slug = SlugService::createSlug(Project::class, 'slug', 'My First Post');

    public function showCreateProjectModal() {
        
        // Change the public variable showModelForm from false to true because you are going from not showing the modal to showing it. 
        $this->showModalForm = true;

    }

    // Create a method for storeProject for the Create Project Modal
    public function storeProject(){

        // Gather information from the Create Project Modal and enter it into MySql.
        $this->validate([
            'project_name' => 'required',
            'general_contractor' => 'required',
            'client' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        $project =new Project();
        $project->user_id = auth()->user()->id;
        $project->project_name = $this->project_name;
        $project->slug = $this->slug;
        $project->general_contractor = $this->general_contractor;
        $project->client = $this->client;
        $project->street = $this->street;
        $project->city = $this->city;
        $project->state = $this->state;
        $project->zip = $this->zip;
        $project->description = $this->description;
        $project->status = $this->status;
        
        $project->save();
        $this->reset();
    }

    public function render()
    {
        return view('livewire.project-form', [
            'projects' => Project::all()
        ]);
    }
}
