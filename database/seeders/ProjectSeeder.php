<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /// This see will look into the 'ADDRESS' model for a 'newFactory' method and perform the instructions that follow.
        // $project->street = $this->faker->unique()->streetAddress();
        // $project->city = $this->faker->citySuffix(); //citySuffix() ex.'borough'
        // $project->zip = $this->faker->postcode(); //postcode() ex.'17916'

        // Project fields
        $project = new Project;
        $project->project_name = '100 South 2nd Street';
        $project->manager = 'David Lopez';
        $project->company_id = 1;
        $project->prime_id = 2;
        $project->general_contractor_id = 3;
        $project->street = '100 South 2nd Street';
        $project->city = 'Brooklyn';
        $project->state = 'NY'; //stateAbbr() ex.'OH'
        $project->zip = '11211';
        $project->description = 'Chimney Maintenance';
        $project->save();

        // Project fields
        $project = new Project;
        $project->project_name = '200 South 2nd Street';
        $project->manager = 'David Lopez';
        $project->company_id = 1;
        $project->prime_id = 2;
        $project->general_contractor_id = 3;
        $project->street = '200 South 2nd Street';
        $project->city = 'Brooklyn';
        $project->state = 'NY'; //stateAbbr() ex.'OH'
        $project->zip = '11211';
        $project->description = 'Chimney Liners';
        $project->save();
        
        // Project fields
        $project = new Project;
        $project->project_name = '4228 Park Avenue';
        $project->manager = 'David Lopez';
        $project->company_id = 1;
        $project->prime_id = 2;
        $project->general_contractor_id = 3;
        $project->street = '4228 Park Avenue';
        $project->city = 'Bronx';
        $project->state = 'NY'; //stateAbbr() ex.'OH'
        $project->zip = '10457';
        $project->description = 'Fabrication';
        $project->save();
    }
}