<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;

class ClientDetails extends Component
{
    
    // Established the public variable needed to save data.
    public $selected_id;
    public $selected_name;
    public $selected_status;
    public $selected_street;
    public $selected_city;
    public $selected_state;
    public $selected_zip;
    public $selected_contact;
    public $selected_phone;
    public $selected_email;
    public $selected_website;
    public $selected_description;

    public $showClientCardContainer = false;

    // Add a listener for the anchor tag listings on Form.
    // Each anchor tag should be clickable.  
    // The click will take them to the details card.
    // Execute the method in the brackets.
    protected $listeners = ['showClientCard'];
    
    // *****SHOW CLIENT CARD UNDERNEATH CLIENT LIST*****
    // This function/method is responsible for displaying the individual client modal.
    // This function/method activates when you click on row of the client table.
    // The client modal is wher you will see all details of the client.
    public function showClientCard(Client $client) {

        // Show client Card
        $this->showClientCardContainer = true;

        // Show client ID along with Header string.
        $this->selected_id = "# ".$client->id;
        
        // Show client name along with header string.
        $this->selected_name = $client->name;

        // Show client status
        $this->selected_status = $client->status;

        // Show client contact
        $this->selected_contact = $client->contact;

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

        // Show client Telephone
        $this->selected_phone = $client->phone;

        // Show client website
        $this->selected_website = $client->website;

        // Show client description
        $this->selected_description = $client->description;
    }

    public function render()
    {
        return view('livewire.client-details');
    }
}
