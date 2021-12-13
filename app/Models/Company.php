<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public $guarded = [];

    /**
     * The company belongs to one type
     * The method is in singular
     */
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    /**
     * The company has many contacts
     * Contact Table must have a column of 'company_id'.
     */
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    /**
     * A Company has many projects
     * Project Table must have a column of 'company_id'.
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    /**
     * A Company many have many addresses
     * Some company may have multiple offices.
     */
    public function addresses()
    {
        return $this->belongsToMany(Address::class);
    }
}
