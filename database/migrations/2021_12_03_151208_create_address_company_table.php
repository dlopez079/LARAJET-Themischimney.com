<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_company', function (Blueprint $table) {
            $table->bigInteger('address_id'); // This colum will hold the address_id of the address the company will reference.
            $table->bigInteger('company_id'); // This column will hold the company_id of the company the address will reference.
            $table->timestamps();
            $table->primary(['address_id','company_id']); 

            $table->foreign('address_id')->references('id')->on('addresss')->onDelete('cascade'); // Take your foreign ID and reference it to the id of the address table.
            $table->foreign('company_id')->references('id')->on('companys')->onDelete('cascade'); // Take your foreign ID and reference it to the id of the companys table.

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address_company');
    }
}
