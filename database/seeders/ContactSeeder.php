<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * When you run the artisan see command, it will run this public function
     *
     * @return void
     */
    public function run()
    {
        // This see will look into the 'ADDRESS' model for a 'newFactory' method and perform the instructions that follow.
        Contact::newFactory()
        ->count(10)
        ->create();
    }
}
