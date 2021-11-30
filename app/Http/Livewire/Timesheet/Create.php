<?php

namespace App\Http\Livewire\Timesheet;

use Livewire\Component;
use App\Models\Project;
use App\Models\User;

class Create extends Component
{

    public $showTimesheetModal = false;
    public $activeProjectSelected;
    public $buttonStatus;
    public $currentUser;  // variable used to capture the status of the button.

    /**
     * Create listeners for other components.
     */
    public function getListeners() 
    {
        return [
            'showCreateTimesheetModal' => 'showCreateTimesheetModal',
        ];
    }

    /**
     * Create a function that will active when listeners are called upon. 
     * In this case, when the create timesheet button is clicked on the timesheet.show blade, this method will activate.
     */
    public function showCreateTimesheetModal() 
    {
        $this->showTimesheetModal = true;
    }

    public function timeRecordBtn() {
        
        
    }
        /** On-Click first click, this button will 
         * () 1. Turn Green Button to Red Color/Turn text from Start Time to stop time
         * () 2. Make Boolean True on isActive.
         * () 3. Generate the date that button is pressed.
         * () 4. Generate the timeFrom that button is pressed.
         * On Second click, this button will
         * () 1. Turn Red Button to Green color/ Turn text from Stop Time to Start Time
         * () 2. Make Boolean False on isActive.
         * () 3. Generate the timeTo that button is pressed.
        */
         
        

    public function render()
    {
        // I saved the current user signed in to a variable.
        $currentUserId =auth()->user()->id;

        // I returned to the view all the project that the user is assigned to. 
        return view('livewire.timesheet.create', [
            'user' => User::find($currentUserId)
        ]);
    }
}
