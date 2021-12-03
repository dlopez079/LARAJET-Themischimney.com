<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;
use App\Models\Contact;
use Livewire\WithPagination;

class Create extends Component
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

    protected function getListeners()
    {
        return [
            'showCreateContactModal' => 'showCreateContactModal',
        ];
    }
    
    // public $slug = SlugService::createSlug(contact::class, 'slug', 'My First Post');

    // ***** SHOW CLIENT MODAL FORM *****
    // This functionj/method is responsible for displaying the client modal form.
    // The client model form is where you will enter and save client information. 
    public function showCreateContactModal() {
        
        // Change the public variable showModelForm from false to true because you are going from not showing the modal to showing it. 
        $this->showModalForm = true;

    }

    // ***** STORE CLIENT INFO *****
    // Create a method for storeClient for the Create Client Modal
    public function storeContact()
    {

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

        $contacts =new Contact();
        $contacts->user_id = auth()->user()->id;
        $contacts->name = $this->name;
        $contacts->slug = $this->slug;
        $contacts->street = $this->street;
        $contacts->city = $this->city;
        $contacts->zip = $this->zip;
        $contacts->contact = $this->contact;
        $contacts->phone = $this->phone;
        $contacts->email = $this->email;
        $contacts->website = $this->website;
        $contacts->description = $this->description;
        $contacts->status = $this->status;
        
        $contacts->save();
        $this->reset();
    }
    public function render()
    {
 
        return view('livewire.contacts.create', [
            'contacts' => Contact::orderBy('id', 'desc')->paginate(5),
       ]);
    }
}
