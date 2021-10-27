<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;

class ClientDetails extends Component
{
    
    public $selected_id;
    public $selected_name;
    public $selected_status;
    public $selected_street;
    public $selected_city;
    public $selected_state;
    public $selected_zip;
    // public $contact;
    // public $phone;
    public $selected_email;
    // public $website;
    // public $description;
    // public $user_id;
    public $showClientCardContainer = false;

    protected $listeners = ['showClientCard'];

    
    
    // *****SHOW CLIENT CARD UNDERNEATH CLIENT LIST*****
    // This function/method is responsible for displaying the individual client modal.
    // This function/method activates when you click on row of the client table.
    // The client modal is wher you will see all details of the client.
    public function showClientCard(Client $client) {

        // Show client Card
        $this->showClientCardContainer = true;

        // Show client ID along with Header string.
        $this->selected_id = "Client ID: ".$client->id;
        
        // Show client name along with header string.
        $this->selected_name = "Client Name: ".$client->name;

        // Show client status
        $this->selected_status = $client->status;

        // Show client street
        $this->selected_street = $client->street.",";

        // Show client city
        $this->selected_city = $client->city.",";

        // Show client state
        $this->selected_state = $client->state;

        // Show client zip
        $this->selected_zip = $client->zip;

        // Show client email
        $this->selected_email = $client->email;

    }

    public function render()
    {
        return view('livewire.client-details');
    }
}
