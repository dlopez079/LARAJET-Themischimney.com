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
    public $name;
    public $slug;
    public $date;
    public $project;
    public $city;
    public $timeIn;
    public $timeOut;
    public $hours;
    public $user_id;
    public $showModalForm = false;

    public function showCreateTimesheetModal() {
        
        // Change the public variable showModelForm from false to true because you are going from not showing the modal to showing it. 
        $this->showModalForm = true;

    }

    // Create a method for storetimesheet for the Create timesheet Modal
    public function storeTimesheet(){

        // Gather information from the Create timesheet Modal and enter it into MySql.
        $this->validate([
            'name' => 'required',
            'date' => 'required',
            'project' => 'required',
            'city' => 'required',
            'timeIn' => 'required',
            'timeOut' => 'required',
            'hours' => 'required',
          ]);

        $timesheet =new timesheet();
        $timesheet->user_id = auth()->user()->id;
        $timesheet->name = $this->name;
        $timesheet->slug = $this->slug;
        $timesheet->date = $this->date;
        $timesheet->project = $this->project;
        $timesheet->city = $this->city;
        $timesheet->timeIn = $this->timeIn;
        $timesheet->timeOut = $this->timeOut;
        $timesheet->hours = $this->hours;
  
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