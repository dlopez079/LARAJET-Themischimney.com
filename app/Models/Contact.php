<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Database\Factories\ContactFactory; // Required for Factory method.

class Contact extends Model
{
    use HasFactory;  // Factory Trait

    public $guarded = []; // information will pass through guarded gates.

    /**
    * The assigned traited information from 'Seeder' will go through 'newFactory' function which will create a new definition within the 'Factory'
    */
   protected static function newFactory()
   {
      return ContactFactory::new();    
   }

}
