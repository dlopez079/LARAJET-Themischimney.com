<?php

namespace App\Http\Livewire\Timesheet\Show;

use Livewire\Component;
use App\Models\User;
use App\Models\Timesheet;

class Mechanic extends Component
{

    public function timeTo(Timesheet $timesheet) 
    {
        //Created a function to clock out.
        $timesheet = Timesheet::find($timesheet->id);
        date_default_timezone_set("America/New_York");
        $timesheet->time_to = date("h:i:s A");
        $timesheet->save(); 

        if($timesheet->save())
        {
            // Emit to project edit to refresh the selected project.  
            return redirect()->to('/timesheets');
        };
    }

    public function render()
    {
        $currentUserId = auth()->user()->id; // Used to track the user that inputs the time.

        return view('livewire.timesheet.show.mechanic', [
            'user' => User::find($currentUserId)
        ]);
    }
}
