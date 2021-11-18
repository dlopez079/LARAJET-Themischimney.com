<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreateProjectUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_user', function (Blueprint $table) {
            $table->bigInteger('project_id')->unsigned(); // This column will hold the Project ID that belongs to the User ID.
            $table->bigInteger('user_id')->unsigned(); // This column will hold the user ID that belongs to the Project ID.
            $table->timestamps();
            $table->primary(['project_id','user_id']);

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade'); // Take your foreign ID and reference it to the id of the project table.
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Take your foreign ID and reference it to the id of the users table.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_users');
    }
}
