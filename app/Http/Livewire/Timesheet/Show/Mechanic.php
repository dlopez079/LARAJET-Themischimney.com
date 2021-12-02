<?php

namespace App\Http\Livewire\Timesheet\Show;

use Livewire\Component;
use App\Models\User;

class Mechanic extends Component
{
    public function render()
    {
        $currentUserId = auth()->user()->id; // Used to track the user that inputs the time.

        return view('livewire.timesheet.show.mechanic', [
            'user' => User::find($currentUserId)
        ]);
    }
}
