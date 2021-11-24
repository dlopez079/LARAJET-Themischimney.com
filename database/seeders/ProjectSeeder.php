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
        Project::newFactory()
        ->count(10)
        ->create();
    }
}
