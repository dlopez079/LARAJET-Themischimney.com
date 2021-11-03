<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Database\Factories\CommentFactory; // Bring in the comments Factory so you can send instructions.

class Comment extends Model
{
    use HasFactory;

    public $guarded = [];

    /**
     *  Use the factory new method to create comments for this table.
     */
    protected static function newFactory()
    {
        // Use the new method in the Comment Factory.
        return CommentFactory::new();    
    }
}
