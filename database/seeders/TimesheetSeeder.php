<?php

namespace Database\Seeders;

use Illuminate\Database\Schema\ForeignIdColumnDefinition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TimesheetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Timesheet database is going to have the following fields
        // Date > Create a seed for random date
        // Project > This will change once relationships are established
        // City > Create a seed for random city string
        // Time In > Create a seed for random time.
        // Time Out > Create a seed for random time. 
        // Hours > Create a seed for random time string. 

    }
}
