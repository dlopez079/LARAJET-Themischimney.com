<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client; //Add model to the top 

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * When you run the artisan see command, it will run this public function
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Address::newFactory(10)->create();
        // This see will look into the 'Client' model for a 'newFactory' method and perform the instructions that follow.
        Client::newFactory()
            ->count(10)
            ->create();
    }
}
