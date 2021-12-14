<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $type = new Type;
        $type->name = 'Client';
        $type->save();

        $type = new Type;
        $type->name = 'Primary Contractors';
        $type->save();

        $type = new Type;
        $type->name = 'General Contractors';
        $type->save();
        
    }
}
