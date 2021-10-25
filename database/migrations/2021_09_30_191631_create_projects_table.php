<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id'); 
            $table->string('project_name');
            $table->string('slug')->unique();
            $table->foreignId('general_contractor_id');
            $table->foreignId('client_id');
            $table->string('street');
            $table->string('city');
            $table->string('state')->default('NY');
            $table->string('zip');
            $table->longText('description')->nullable();
            $table->string('status')->default('Active');
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
        Schema::dropIfExists('projects');
    }
}
