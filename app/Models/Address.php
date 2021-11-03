<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Database\Factories\AddressFactory;

class Address extends Model
{
    use HasFactory;  // Factory trait

    protected $guarded = [];  // information will pass through guarded gates.

   /**
    * The assigned traited information from 'AddressSeeder' will go through 'newFactory' function which will create a new definition within the 'AddressFactory'
    */
   protected static function newFactory()
   {
      return AddressFactory::new();    
   }

}


