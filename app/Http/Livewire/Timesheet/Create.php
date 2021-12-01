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
    public $btnStatus = "Clock In";
    
    public $currentUserId;

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

    public function storeTimesheet($isWorking) 
    {  
        // I saved the current user signed in to a variable.
        $isWorking = 0;
        $this->currentUserId =auth()->user()->id;
        $date = date('mmddyy');
        $time = time();
        

        // User is working if value is 1.
        if( boolval($isWorking) == 0 )
        {
            
            $timesheet =new Timesheet();
            $timesheet->user_id = $this->currentUserId; // Used to track the user that inputs the time.
            $timesheet->project_id = $this->activeProjectSelected;  // Used to track the project that the time is charged to.
            $timesheet->date = $date; // Used to track the date of the time entry.
            $timesheet->time_from = $time; // Used to see when user clocks in
            $timesheet->isWorking = $isWorking; // Use to see if user is actively working.
           
            // Change the value from Clock In to Clock Out
            $this->btnStatus = 'Clock Out'; 
            
        } 
        
        elseif( boolval($isWorking) == 1 )
        {

            // $this->currentUserId->timesheets->where('isworking', 1)->update('time_to', $time);
            
            // $this->currentUserId->timesheets->where('isworking', 1)->update('isWorking', 0);

            $this->btnStatus = 'Clock In';

            $value = 0;
        }
        
    }
        
        
    public function render()
    {
        // I saved the current user signed in to a variable.
        $currentUserId =auth()->user()->id;

        // I returned to the view all the project that the user is assigned to. 
        return view('livewire.timesheet.create', [
            'user' => User::find($currentUserId),
            'projects' => $this->activeProjectSelected
        ]);
    }
}
