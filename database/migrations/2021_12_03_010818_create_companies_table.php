<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Created to hold the name of the company
            $table->string('contact_type_id'); // A column to hold the contact type for ths company/client.
            $table->string('address'); // Creatd to hold the address ID for the address of the company that will be saved on another table.
            $table->string('phone'); // Created to hold the main line of the company. 
            $table->string('website'); // Created to hold the website of the company. 
            $table->string('status');  // Creatd to maintain the status of the company. 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
