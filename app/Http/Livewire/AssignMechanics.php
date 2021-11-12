<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AssignMechanics extends Component
{

    /** 
     * Create a method an call it assignMechanicToThisProject
     * 
     */ 
    public function assignMechanicToThisProject() 
    {
        // Crab selected project id.
        // Grab mechanic id from input selection. 
        // Store record on project_user table.
    }

    public function render()
    {
        return view('livewire.assign-mechanics');
    }
}
