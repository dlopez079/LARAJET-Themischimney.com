<?php

namespace App\Http\Livewire\Timesheet\Show;

use Livewire\Component;
use App\Models\User;

class Manager extends Component
{
    public function render()
    {
        $currentUserId = auth()->user()->id; // Used to track the user that inputs the time.

        return view('livewire.timesheet.show.manager', [
            'user' => User::find($currentUserId)
        ]);
    }
}
