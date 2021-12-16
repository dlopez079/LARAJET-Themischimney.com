<?php

namespace App\Http\Livewire\Timesheet\Show;

use Livewire\Component;
use App\Models\User;
use App\Models\Timesheet;


class Mechanic extends Component
{
    public $currentUserIsWorking;

    public function timeTo(Timesheet $timesheet) 
    {
        //Created a function to clock out.
        $timesheet = Timesheet::find($timesheet->id);
        date_default_timezone_set("America/New_York");
        $timesheet->time_to = date("h:i:s A");
        $timesheet->isWorking = false;
        $timesheet->save(); 

        // Refresh the component

        if($timesheet->save())
        {
            // Emit to project edit to refresh the selected project.  
            return redirect()->to('/timesheets');
        };
    }

    public function render()
    {
        $currentUserId = auth()->user()->id; // Used to track the user that inputs the time.
        // dd($currentUserId);
        $isWorking = Timesheet::where('isWorking', '=', '1')->get();
        // dd($isWorking);
        $this->currentUserIsWorking = User::find($currentUserId)->timesheets()->where('isWorking', 1)->exists();

        // dd($currentUserIsWorking);

        return view('livewire.timesheet.show.mechanic', [
            'user' => User::find($currentUserId),
            'currentUserIsWorking' => $this->currentUserIsWorking,
        ]);

    }
}
