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
    public $slug;
    public $street;
    public $city;
    public $zip;
    public $contact;
    public $phone;
    public $email;
    public $website;
    public $status;
    public $description;
    public $user_id;
    public $showModalForm = false;
    
    // public $slug = SlugService::createSlug(Project::class, 'slug', 'My First Post');

    public function showCreateClientModal() {
        
        // Change the public variable showModelForm from false to true because you are going from not showing the modal to showing it. 
        $this->showModalForm = true;

    }

    // Create a method for storeClient for the Create Client Modal
    public function storeClient(){

        // Gather information from the Create Client Modal and enter it into MySql.
        $this->validate([
            'name' => 'required',
            'street' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'contact' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'website' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        $client =new Client();
        $client->user_id = auth()->user()->id;
        $client->name = $this->name;
        $client->slug = $this->slug;
        $client->street = $this->street;
        $client->city = $this->city;
        $client->zip = $this->zip;
        $client->contact = $this->contact;
        $client->phone = $this->phone;
        $client->email = $this->email;
        $client->website = $this->website;
        $client->description = $this->description;
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
