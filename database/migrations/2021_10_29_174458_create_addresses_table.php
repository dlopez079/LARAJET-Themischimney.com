<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id'); // Created to keep trace of the user that is entering data.
            $table->string('street')->unique(); // We should not have the same address twice.
            $table->string('street 2')->nullable(); // The number of the floor will never be 3 digits.
            $table->string('city'); // The city will be written out.
            $table->char('st', 2); // The state will always be 2 digits in caps.
            $table->string('zip', 10); // The zip code will be 10 digits with a hyphen.  
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
        Schema::dropIfExists('addresses');
    }
}
