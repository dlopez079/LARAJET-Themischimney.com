<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Unique;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ClientForm extends Component
{
    public $name;
    public $street;
    public $city;
    public $state;
    public $zip;
    public $status;
    public $user_id;
    public $count;
    public $showModalForm = false;
    public $slug;
    // public $slug = SlugService::createSlug(Project::class, 'slug', 'My First Post');

    public function showCreateClientModal() {
        
        // Change the public variable showModelForm from false to true because you are going from not showing the modal to showing it. 
        $this->showModalForm = true;

    }

    // Create a method for storeProject for the Create Project Modal
    public function storeClient(){

        // Gather information from the Create Project Modal and enter it into MySql.
        $this->validate([
            'name' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'status' => 'required'
        ]);

        $client =new Client();
        $client->user_id = auth()->user()->id;
        $client->name = $this->name;
        $client->slug = $this->slug;
        $client->street = $this->street;
        $client->city = $this->city;
        $client->state = $this->state;
        $client->zip = $this->zip;
        $client->status = $this->status;
        
        $client->save();
        $this->reset();
    }
    
    public function render()
    {
        return view('livewire.client-form', [
            'clients' => Client::all()
        ]);
    }
}
