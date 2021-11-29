<?php

namespace App\Http\Livewire\Timesheet;

use Livewire\Component;

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

    public function render()
    {
        return view('livewire.timesheet.create');
    }
}
