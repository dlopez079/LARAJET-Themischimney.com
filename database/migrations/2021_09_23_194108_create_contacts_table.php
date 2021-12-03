<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id'); // This is a column that will hold the company ID the type refers to. 
            $table->string('first_name');
            $table->string('last_name')->index();  // Last name is the column that will be searched the most so I made that the index.
            $table->string('title');
            $table->string('email')->unique(); // There will not be two of the same emails. 
            $table->string('tel', 10);
            $table->string('cel', 10);
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('contacts');
    }
}
