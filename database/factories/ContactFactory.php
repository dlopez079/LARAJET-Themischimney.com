<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Contact Fields
            'first_name' => $this->faker->unique()->streetAddress(),
            'last_name' => $this->faker->unique()->lastName(),  
            'title' => $this->faker->jobTitle(), 
            'email' => $this->faker->email(), //secondaryAddress(), ex. 'Suite 961'
            'tel' => $this->faker->randomDigitNotNull(), // an integer between 1 and 9
            'cel' => $this->faker->randomDigitNotNull(), // an integer between 1 and 9
        ];
    }
}
