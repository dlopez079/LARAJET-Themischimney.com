<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination; // Required to paginate the list of projects. 

class Show extends Component
{
    use WithPagination; // Required to paginate the list of projects

    // ***** RENDER THE COMPONENT *****
    // Render the component and display results in descending order by id while paginating. 
    public function render()
    {
        return view('livewire.company.show', [
            'companies' => Company::orderBy('id', 'desc')->paginate(5),
            
        ]);
    }
}
