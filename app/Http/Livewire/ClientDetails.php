<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;

class ClientDetails extends Component
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
    public $showClientCard = false;
    public $selected_id;

   
    public $prompt;

    protected $listeners = ['showClientCard'];

    // *****SHOW CLIENT MODAL*****
    // This function/method is responsible for displaying the individual client modal.
    // This function/method activates when you click on row of the client table.
    // The client modal is wher you will see all details of the client.
    public function showClientCard() {
        
        // Prompt Test to see if the event listener is working.
        $this->prompt = "The listener is working!";
        
        // Change the public variable showModelForm from false to true because you are going from not showing the modal to showing it. 
        // $this->showClientCard = true;

    }

    public function render()
    {
        return view('livewire.client-details', [
            'clients' => Client::all(),
        ]);
    }
}
