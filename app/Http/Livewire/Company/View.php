<?php

namespace App\Http\Livewire\Company;

use Livewire\Component;
use App\Models\Company;

class View extends Component
{
    public $company_name;
    
    public $street;
    public $city;
    public $state;
    public $zip;
    public $description;
    public $status;
    public $user_id;
    public $company;
    public $slug;
    public $selected_id;
    public $selected_name;
    public $selected_status;
    public $selected_street;
    public $selected_city;
    public $selected_state;
    public $selected_zip;
    public $selected_description;
    public $selected_company;
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
    // protected $listeners = ['showcompanyCard'];
    protected function getListeners()
    {
        return [
            'showCompanyCard' => 'showCompanyCard', // A listener for on-click on company.show blade.
            'refreshCompanyView' => '$refresh' // A listener for on-click on uploadfiles blade.
        ];
    }
    
    public function showcompanyCard(Company $company) 
    {
        // Show company Card
        $this->showCompanyCardContainer = true;

        // Show company ID along with Header string.
        $this->selected_id = $company->id;
        
        // Show company name along with header string.
        $this->selected_name = $company->company_name;

        // Show company status
        $this->selected_status = $company->status;

        // Show company $primary_contractor
        $this->selected_primary_contractor = $company->prime_id;

        // Show company $general_contractor
        $this->selected_general_contractor = $company->general_contractor_id;

        // Show company client
        $this->selected_client = $company->client_id;

        // Show company street
        $this->selected_street = $company->street.",";

        // Show company city
        $this->selected_city = $company->city.",";

        // Show company state
        $this->selected_state = $company->state;

        // Show company zip
        $this->selected_zip = $company->zip;

         // Show company phone
         $this->selected_phone = $company->phone;

          // Show company email
        $this->selected_email = $company->email;

         // Show company description
         $this->selected_website = $company->website;

        // Show company description
        $this->selected_description = $company->description;
        
    }

    public function render()
    {
        return view('livewire.company.view');
    }
}
