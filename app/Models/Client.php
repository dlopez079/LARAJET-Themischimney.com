<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable; // Brought in for Slug reasons.
use \Database\Factories\ClientFactory;  // Broungt in for factory seeding.

class Client extends Model
{
    use HasFactory; // Factory trait
    use Sluggable; // Sluggable trait

    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name', 'id'
            ]
        ];
    }

    /**
    * The assigned traited information from 'Seeder' will go through 'newFactory' function which will create a new definition within the 'Factory'
    */
   protected static function newFactory()
   {
      return ClientFactory::new();    
   }

   /**
     * Get the projects for clients
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

}
