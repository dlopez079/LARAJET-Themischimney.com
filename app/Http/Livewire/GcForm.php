<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\gc;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Unique;
use Cviebrock\EloquentSluggable\Sluggable;

class GcForm extends Component
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

    public function showCreateGcModal() {
        
        // Change the public variable showModelForm from false to true because you are going from not showing the modal to showing it. 
        $this->showModalForm = true;

    }

    // Create a method for storegc for the Create gc Modal
    public function storeGc(){

        // Gather information from the Create gc Modal and enter it into MySql.
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

        $gc =new gc();
        $gc->user_id = auth()->user()->id;
        $gc->name = $this->name;
        $gc->slug = $this->slug;
        $gc->street = $this->street;
        $gc->city = $this->city;
        $gc->zip = $this->zip;
        $gc->contact = $this->contact;
        $gc->phone = $this->phone;
        $gc->email = $this->email;
        $gc->website = $this->website;
        $gc->description = $this->description;
        $gc->status = $this->status;
        
        $gc->save();
        $this->reset();
    }


    public function render()
    {
        return view('livewire.gc-form', [
            'gcs' => gc::all()
        ]);
    }
}
