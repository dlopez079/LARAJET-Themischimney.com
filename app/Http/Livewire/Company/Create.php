<?php

namespace App\Http\Livewire\Company;

use Livewire\Component;
use App\Models\Company;
use App\Models\Type;


class Create extends Component
{

    // Variable used to show Modal
    public $showModalForm = false;

    // Company fieldset variables
    public $name;
    public $companyType;
    public $mainLine;
    public $website;

    // Company Address fieldset variables
    public $street;
    public $street2;
    public $city;
    public $zip;

    // Contact fieldset variables
    public $firstName;
    public $lastName;
    public $title;
    public $email;
    public $cel;

    // User ID to keep track of who is entering data. 
    public $user_id;
    
    // Created a listener function for other components to send ignite instructions on this component.
    protected function getListeners()
    {
        return [
            'showCreateCompanyModal' => 'showCreateCompanyModal',
        ];
    }
    

    /** 
     * SHOW CLIENT MODAL FORM
     * This functionj/method is responsible for displaying the client modal form.
     * The client model form is where you will enter and save client information. 
    */
    public function showCreateCompanyModal() {
        
        // Change the public variable showModelForm from false to true because you are going from not showing the modal to showing it. 
        $this->showModalForm = true;

    }

    /** 
     * STORE COMPANY INFO
     * Create a method for storeClient for the Create Client Modal
    */
    public function storeCompany()
    {

        // Gather information from the Create Client Modal and enter it into MySql.
        $this->validate([
            // Company fieldset
            'name' => 'required',
            'companyType' => 'required',
            'mainLine' => 'required | digits:10',
            'website' => 'required | url',

            // // Company Address fieldset
            // 'street' => 'required',
            // 'city' => 'required',
            // 'zip' => 'required | max:10',
            

            // // Contact Fieldset
            // 'firstName' => 'required', 
            // 'lastName' => 'required',
            // 'title' => 'required', 
            // 'email' => 'required | email',
            // 'cel' => 'required | digits:10',
        ]);

        // Create a new Company object/record.
        $company =new Company();

            // User that is entering data.
            $company->user_id = auth()->user()->id;

            // Company Fieldset
            $company->name = $this->name;
            $company->type_id = $this->companyType;
            $company->main_line = $this->mainLine;
            $company->website = $this->website;

            // // Address Fieldset
            // $company->addresses->street = $this->street;
            // $company->addresses->street2 = $this->street2;
            // // $company->city = $this->city;  DEFAULT 'NY' ON DATABASE
            // $company->addresses->zip = $this->zip;

            // // Contact Fieldset
            // $company->contacts->first_name = $this->firstName;
            // $company->contacts->last_name = $this->lastName;
            // $company->contacts->title = $this->title;
            // $company->contacts->email = $this->email;
            // $company->contacts->cel = $this->cel;
        
        $company->save();
        $this->reset();
    }

    public function render()
    {

        return view('livewire.company.create', [
            'types' => Type::all(),
       ]);
    }
}
