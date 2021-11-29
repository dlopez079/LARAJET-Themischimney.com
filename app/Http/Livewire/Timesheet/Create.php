<?php

namespace App\Http\Livewire\Timesheet;

use Livewire\Component;
use App\Models\Project;

class Create extends Component
{

    public $showTimesheetModal = false;

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

    // Display Active projects
    public function activeProjects(Project $project)
    {

    }

    public function assignedMechanics(Project $project) 
    {
        //Show assigned mechanics
        if($project->users) {
            $this->assignedMechanics = $project->users->pluck('name');
        } 
        
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
        return view('livewire.timesheet.create', [
            'projects' => Project::all()
                ->where('status', 'Active')
        ]);
    }
}
