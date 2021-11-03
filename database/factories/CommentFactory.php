<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Add all the fields the factory shoud poppulate.
            // Use the faker php function.
            // Obtain a random digit below 10 to correspond to the user that created it.
            // Obtain a comment that is only one paragraph long.
            'user_id' => $this->faker->randomDigitNotNull(9),
            'comment' => $this->faker->paragraphs(2, true),
        ];
    }
}
