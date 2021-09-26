<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{

    // Create variable for form field data.
    public $name;
    public $email;
    public $tel;
    public $message;
    public $success;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'tel' => 'required|max:15',
        'message' => 'required|min:5'
    ];
   

    public function updated($field) 
    {
        $this->validateOnly($field);
    }


    public function submit()
    {
        // Validate before running the submitForm function. 
        $this->validate();
   
        // I used the line below to test if the information is being captured by the form. It is currently commented out.
        // dd($this->name, $this->email, $this->phone, $this->message);
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'tel' => $this->tel,
            'message' => $this->message
        ]);

         // Reset the fields in the form
         $this->reset(['name', 'email', 'tel', 'message']);

         // Display a success message to your users if validated and text is entered onto database. 
        $this->success = "Your inquire has been submitted successfully!";
   
        // return redirect()->to('/form');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
