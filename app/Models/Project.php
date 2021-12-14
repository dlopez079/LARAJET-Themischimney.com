<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


    protected $guarded = [];



    /**
     * Get the attachments for the Project.
     * QUERY:  SELECT * FROM Attachment WHERE project_id = the selected id.
     * Attachment Table must have a column of 'project_id'.
     */
    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    /**
     * The users that belong to Projects.
     * The name of this method 'user' will be searched using 'user_id'
     * QUERY: SELECT * FROM Project WHERE user_id = the selected id.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'project_user')->withTimestamps();
    }

    /**
     * One Project can belong to one company.
     * Must put foreign ID in table refering to company_id.
     */
    public function company()
    {
       return $this->belongsTo(Company::class);
    }

    /**
     * One Project has many timesheet entries.
     * Must put a column on timesheets that refers to the project_id
     */
    public function timesheets()
    {
        return $this->hasMany(Timesheet::class);
    }
}
