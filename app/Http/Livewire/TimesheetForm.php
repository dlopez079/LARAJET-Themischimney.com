<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\timesheet;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Unique;
use Cviebrock\EloquentSluggable\Sluggable;

class TimesheetForm extends Component
{
    public $project;
    public $slug;
    public $date;
    public $city;
    public $timeIn;
    public $timeOut;
    public $hours;
    public $user_id;
    public $team_id;
    public $showModalForm = false;

    public function showCreateTimesheetModal() {
        
        // Change the public variable showModelForm from false to true because you are going from not showing the modal to showing it. 
        $this->showModalForm = true;

    }

    // Create a method for storetimesheet for the Create timesheet Modal
    public function storeTimesheet(){

        // Gather information from the Create timesheet Modal and enter it into MySql.
        $this->validate([
            'project' => 'required',
            'date' => 'required',
            'city' => 'required',
            'timeIn' => 'required',
            'timeOut' => 'required',
            'hours' => 'required',
          ]);

        $timesheet =new timesheet();
        $timesheet->user_id = auth()->user()->id;
        $timesheet->project_id = $this->project_id;
        $timesheet->date = $this->date();
        $timesheet->time_from = $this->time();
        $timesheet->date_submitted = $this->dateSubmitted;
  
        $timesheet->save();
        $this->reset();
    }


    public function render()
    {
        return view('livewire.timesheet-form', [
            'timesheets' => timesheet::all()
        ]);
    }
}
