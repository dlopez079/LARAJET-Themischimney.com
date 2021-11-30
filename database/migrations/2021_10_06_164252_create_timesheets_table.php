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
            $table->date('date'); // Used to track the date of the time entry.
            $table->time('time_from'); // Used to see when user clocks in
            $table->time('time_to');  // Used to see when user clocks out.
            $table->boolean('isWorking'); // Use to see if user is actively working.
            $table->date('date_submitted'); //Used to see when user submitted time.
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
