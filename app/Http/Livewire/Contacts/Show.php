<?php

namespace App\Http\Livewire\Contacts;

use App\Models\Company;
use Livewire\Component;
use App\Models\Contact;
use Livewire\WithPagination; // Required to paginate the list of projects. 

class Show extends Component
{
    use WithPagination; // Required to paginate the list of projects

    // ***** RENDER THE COMPONENT *****
    // Render the component and display results in descending order by id while paginating. 
    public function render()
    {
        return view('livewire.contacts.show', [
            'companies' => Company::orderBy('id', 'desc')->paginate(5),
            
        ]);
    }
}
