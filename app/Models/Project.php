<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'project_name', 'id'
            ]
        ];
    }

    /**
     * Get the attachments for the Project.
     */
    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    /**
     * The users that belong to Projects.
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
