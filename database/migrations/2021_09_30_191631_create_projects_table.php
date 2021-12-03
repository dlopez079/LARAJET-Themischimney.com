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
            $table->string('project_name');
            $table->string('manager')->nullable();  // Who is the project manager.
            $table->string('slug')->unique();
            $table->foreignId('company_id')->nullable();
            $table->foreignId('prime_id')->nullable();
            $table->foreignId('general_contractor_id')->nullable();
            $table->string('street');
            $table->string('city');
            $table->string('state')->default('NY');
            $table->string('zip');
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
