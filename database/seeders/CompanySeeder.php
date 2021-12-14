<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Create the following types using the seeder
        $company = new Company;
        $company->user_id = 1;
        $company->name = 'Company 001';
        $company->type_id = "1";
        $company->main_line = "1234567890";
        $company->website = "https://www.mattmen.com";
        $company->save();

        $company = new Company;
        $company->user_id = 1;
        $company->name = 'Company 002';
        $company->type_id = "2";
        $company->main_line = "1234567890";
        $company->website = "https://www.mattmen.com";
        $company->save();

        $company = new Company;
        $company->user_id = 1;
        $company->name = 'Company 003';
        $company->type_id = "3";
        $company->main_line = "1234567890";
        $company->website = "https://www.mattmen.com";
        $company->save();
        
    }
}
