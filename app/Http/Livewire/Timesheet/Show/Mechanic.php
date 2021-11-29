<?php

namespace App\Http\Livewire\Timesheet\Show;

use Livewire\Component;
use App\Models\Timesheet;

class Mechanic extends Component
{
    public function render()
    {
        return view('livewire.timesheet.show.mechanic', [
            'timesheets' => Timesheet::all()
        ]);
    }
}
