<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public $guarded = [];

    /**
     * Get the company from the user.
     * QUERY: SELECT * from Attachment WHERE user_id = the selected id.
     * Company Table must have a column of 'user_id'. 
     */
    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
