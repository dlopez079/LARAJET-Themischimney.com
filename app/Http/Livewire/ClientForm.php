<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use Cocur\Slugify\Slugify;
use Livewire\WithPagination;
use \Illuminate\Session\SessionManager;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Unique;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ClientForm extends Component
{
    use WithPagination;

    public $client;
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

    // ***** SHOW CLIENT MODAL FORM *****
    // This functionj/method is responsible for displaying the client modal form.
    // The client model form is where you will enter and save client information. 
    public function showCreateClientModal() {
        
        // Change the public variable showModelForm from false to true because you are going from not showing the modal to showing it. 
        $this->showModalForm = true;

    }

    // ***** STORE CLIENT INFO *****
    // Create a method for storeClient for the Create Client Modal
    public function storeClient(){

        // Gather information from the Create Client Modal and enter it into MySql.
        $this->validate([
            'name' => 'required',
            'street' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'contact' => 'required',
            'phone' => 'required | digits:10',
            'email' => 'required | email',
            'website' => 'required | url',
            'description' => 'required | min:6 | max: 150',
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
    
    // ***** RENDER THE COMPONENT *****
    // Render the component and emit wire click on individual clients.
    public function render()
    {
        return view('livewire.client-form', [
             'clients' => Client::orderBy('id', 'desc')->paginate(5),
        ]);
    }
}
