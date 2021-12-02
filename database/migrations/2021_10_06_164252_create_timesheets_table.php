<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimesheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timesheets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique();  // Used to track the user that inputs the time.
            $table->foreignId('project_id'); // Used to track the project that the time is charged to.
            $table->boolean('isWorking'); // Use to see if user is actively working.
            $table->string('date_submitted')->nullable(); //Used to see when user submitted time.
            $table->timestamps(); // Timestamps can be used to see the Time created (clock in) and the time updated (clock out.)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timesheets');
    }
}
