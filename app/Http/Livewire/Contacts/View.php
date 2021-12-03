<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;
use App\Models\contact;

class View extends Component
{
    public $contact_name;
    
    public $street;
    public $city;
    public $state;
    public $zip;
    public $description;
    public $status;
    public $user_id;
    public $contact;
    public $slug;
    public $selected_id;
    public $selected_name;
    public $selected_status;
    public $selected_street;
    public $selected_city;
    public $selected_state;
    public $selected_zip;
    public $selected_description;
    public $selected_contact;
    public $selected_primary_contractor;
    public $selected_general_contractor;
    public $selected_client;
    public $selected_phone;
    public $selected_email;
    public $selected_website;
    public $assignedMechanics;

    // Add a listener for the anchor tag listings on Form.
    // Each anchor tag should be clickable.  
    // The click will take them to the details card.
    // Execute the method in the brackets.
    // protected $listeners = ['showContactCard'];
    protected function getListeners()
    {
        return [
            'showContactCard' => 'showContactCard', // A listener for on-click on contact.show blade.
            'refreshContactView' => '$refresh' // A listener for on-click on uploadfiles blade.
        ];
    }
    
    public function showContactCard(Contact $contact) 
    {
        // Show contact Card
        $this->showContactCardContainer = true;

        // Show contact ID along with Header string.
        $this->selected_id = $contact->id;
        
        // Show contact name along with header string.
        $this->selected_name = $contact->contact_name;

        // Show contact status
        $this->selected_status = $contact->status;

        // Show contact $primary_contractor
        $this->selected_primary_contractor = $contact->prime_id;

        // Show contact $general_contractor
        $this->selected_general_contractor = $contact->general_contractor_id;

        // Show contact client
        $this->selected_client = $contact->client_id;

        // Show contact street
        $this->selected_street = $contact->street.",";

        // Show contact city
        $this->selected_city = $contact->city.",";

        // Show contact state
        $this->selected_state = $contact->state;

        // Show contact zip
        $this->selected_zip = $contact->zip;

         // Show contact phone
         $this->selected_phone = $contact->phone;

          // Show contact email
        $this->selected_email = $contact->email;

         // Show contact description
         $this->selected_website = $contact->website;

        // Show contact description
        $this->selected_description = $contact->description;
        
    }

    public function render()
    {
        return view('livewire.contacts.view');
    }
}
