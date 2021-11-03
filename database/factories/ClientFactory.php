<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use League\CommonMark\Normalizer\UniqueSlugNormalizer;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Client Table
            // I did not add a faker slug.  I want to see if it generates itself when I run this factory.
            'company_name' => $this->faker->unique()->company(), // Unique Company Name
            'company_phone' => $this->faker->randomDigitNotNull(), // The phone number is store as string(10).
            'company_website' => $this->faker->website(), // This is the company website.
            'status' => $this->faker->boolean(),  // This is the status of the company.  When entered, it will automaticalkly active the client account.

        ];
    }
}
