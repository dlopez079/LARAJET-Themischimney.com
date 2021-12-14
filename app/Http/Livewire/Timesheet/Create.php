<?php

namespace App\Http\Livewire\Timesheet;

use Livewire\Component;
use App\Models\Project;
use App\Models\User;
use App\Models\Timesheet;

class Create extends Component
{

    public $showTimesheetModal = false;
    public $activeProjectSelected;
   
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

    public function storeTimesheet($id) 
    {  
        // Gather information from the Create Project Modal and enter it into MySql.
        // $this->validate([
        //     'project_name' => 'required',
        // ]);

        $user_id = auth()->user()->id; // Used to track the user that inputs the time.
        $project_id = $id; //Used to track the project that the user is applying time for.
        $isWorking = 1; // Track when the user is working. 
        date_default_timezone_set("America/New_York");

        $timesheets =new Timesheet();
            $timesheets->user_id = $user_id; // Used to track the user that inputs the time.
            $timesheets->project_id = $project_id;  // Used to track the project that the time is charged to.
            $timesheets->isWorking = $isWorking; // Use to see if user is actively working.
            $timesheets->date = date('m/j/y'); // Record time stamp.
            $timesheets->time_from = date("h:i:s A");
        
        $timesheets->save(); 

        if($timesheets->save())
        {
            // Emit to project edit to refresh the selected project.  
            return redirect()->to('/timesheets');
        };

        $this->reset();
        
    }
        
        
    public function render()
    {
        // I saved the current user signed in to a variable.
        $currentUserId =auth()->user()->id;

        // I returned to the view all the project that the user is assigned to. 
        return view('livewire.timesheet.create', [
            'user' => User::find($currentUserId),
        ]);
    }
}
