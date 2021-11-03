<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Give instructions to seeder to begin operations and send over to model
        // Send new factory class, a count class and create class to the comment model.
        Comment::newFactory()->count(10)->create();
    }
}
