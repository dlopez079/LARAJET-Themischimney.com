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
   
    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'tel' => 'required|max:15',
            'message' => 'required|max:150'
        ]);
   
        Contact::create($validatedData);
   
        // return redirect()->to('/form');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
