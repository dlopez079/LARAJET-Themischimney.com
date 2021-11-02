<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address;


class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();
        // \App\Models\Address::newFactory(10)->create();

        Address::newFactory()
            ->count(10)
            ->create();
        
    }
}
