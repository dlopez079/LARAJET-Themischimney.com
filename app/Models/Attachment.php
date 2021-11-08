<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $guarded = [];  // information will pass through guarded gates.

    /**
     * Get the project that owns the attachment.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Get the User that owns the attachment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
