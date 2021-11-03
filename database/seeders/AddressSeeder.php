<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address;


class AddressSeeder extends Seeder
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
        // This see will look into the 'ADDRESS' model for a 'newFactory' method and perform the instructions that follow.
        Address::newFactory()
            ->count(10)
            ->create();
        
    }
}
