<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Database\Factories\AddressFactory;

class Address extends Model
{
    use HasFactory;

    protected $guarded = [];

    
    protected static function newFactory()
     {
        return AddressFactory::new();    
     }

}


