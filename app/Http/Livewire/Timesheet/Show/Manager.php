<?php

namespace App\Http\Livewire\Timesheet\Show;

use Livewire\Component;
use App\Models\Timesheet;

class Manager extends Component
{
    public function render()
    {
        return view('livewire.timesheet.show.manager', [
            'timesheets' => Timesheet::all()
        ]);
    }
}
