<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Prime;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Unique;
use Cviebrock\EloquentSluggable\Sluggable;

class PrimeFrom extends Component
{
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

    public function showCreatePrimeModal() {
        
        // Change the public variable showModelForm from false to true because you are going from not showing the modal to showing it. 
        $this->showModalForm = true;

    }

    // Create a method for storeClient for the Create Prime Modal
    public function storePrime(){

        // Gather information from the Create Prime Modal and enter it into MySql.
        $this->validate([
            'name' => 'required',
            'street' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'contact' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'website' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        $prime =new Prime();
        $prime->user_id = auth()->user()->id;
        $prime->name = $this->name;
        $prime->slug = $this->slug;
        $prime->street = $this->street;
        $prime->city = $this->city;
        $prime->zip = $this->zip;
        $prime->contact = $this->contact;
        $prime->phone = $this->phone;
        $prime->email = $this->email;
        $prime->website = $this->website;
        $prime->description = $this->description;
        $prime->status = $this->status;
        
        $prime->save();
        $this->reset();
    }


    public function render()
    {
        return view('livewire.prime');
    }
}
