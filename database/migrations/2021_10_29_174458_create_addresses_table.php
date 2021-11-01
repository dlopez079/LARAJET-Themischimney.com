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
            $table->string('street')->unique(); // We should not have the same address twice.
            $table->char('floor', 2); // The number of the floor will never be 3 digits.
            $table->string('rooms'); // The rooms will be written out.
            $table->char('state, 2'); // The state will always be 2 digits in caps.
            $table->string('zip_id, 10'); // The zip code will be 10 digits with a hyphen.  
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
