<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'project', 'id'
            ]
        ];
    }

    /**
     * A timesheet belongs to a project
     * QUERY:  SELECT * FROM Timesheet WHERE project_id = the selected id.
     * Timesheet Table must have a column of 'project_id'. 
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
